<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Razorpay\Api\Api;

class RegistrationController extends Controller
{
    // Show registration form
    public function showForm()
    {
        return view('registration');
    }

    // Store form data & create Razorpay order
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:registrations,email',
            'phone' => 'required|string|max:20',
        ]);

        $registration = Registration::create([
            'name'           => $request->name,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'payment_status' => 'pending',
        ]);

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        $order = $api->order->create([
            'receipt'         => 'order_'.$registration->id,
            'amount'          => 100, // ₹1.00 in paise (100 paise = ₹1)
            'currency'        => 'INR',
            'payment_capture' => 1,
        ]);

        // save order_id for later verification
        $registration->update([
            'order_id' => $order['id']
        ]);

        return response()->json([
            'status'          => true,
            'order_id'        => $order['id'],
            'amount'          => $order['amount'],
            'registration_id' => $registration->id,
            'name'            => $registration->name,
            'email'           => $registration->email,
            'phone'           => $registration->phone,
        ]);
    }

    // Verify Razorpay payment (no redirects, only message)
    public function verifyPayment(Request $request)
    {
        $registration = Registration::where('order_id', $request->razorpay_order_id)->first();

        if (!$registration) {
            return response()->json([
                'status'  => false,
                'message' => 'Invalid registration/order'
            ]);
        }

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        $attributes = [
            'razorpay_order_id'   => $request->razorpay_order_id,
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'razorpay_signature'  => $request->razorpay_signature,
        ];

        try {
            // ✅ Verify Razorpay signature
            $api->utility->verifyPaymentSignature($attributes);

            $registration->update([
                'payment_status' => 'paid',
                'payment_id'     => $request->razorpay_payment_id,
            ]);

            return response()->json([
                'status'  => true,
                'message' => '✅ Payment successful!'
            ]);
        } catch (\Exception $e) {
            // ✅ Even if failed, save payment_id if available
            $registration->update([
                'payment_status' => 'failed',
                'payment_id'     => $request->razorpay_payment_id ?? null,
            ]);

            return response()->json([
                'status'  => false,
                'message' => '❌ Payment failed: '.$e->getMessage()
            ]);
        }
    }
}
