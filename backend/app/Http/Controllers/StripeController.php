<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\PaymentIntent;
use App\Http\Controllers\Exception;
use Illuminate\Support\Str;
use Stripe\Stripe as StripeGateway;
use Stripe\StripeClient;
class StripeController extends Controller
{
    public function initiatePayment(Request $request)
{
    StripeGateway::setApiKey('STRIPE_SECRET_KEY');

    try {
        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount * 100, 
            'currency' => $request->currency,
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ]);

        return response()->json(['success'=>true, 'token' => (string) Str::uuid(),
        'client_secret' => $paymentIntent->client_secret], 200);

        
    } catch (\Exception $e) {
        return response()->json(['success'=>false, 'message'=> $e->getMessage()], 500);
       
    }

    
}
public function completePayment(Request $request)
{
    $stripe = new StripeClient('STRIPE_SECRET_KEY');

    // Use the payment intent ID stored when initiating payment
    $paymentDetail = $stripe->paymentIntents->retrieve('PAYMENT_INTENT_ID');

    if ($paymentDetail->status != 'succeeded') {
        return response()->json(['success'=>false, 'message'=> 'Payment has failed'], 402);
    }

    // Complete the payment
}

public function failPayment(Request $request)
{
    // Log the failed payment if you wish
}


}
