<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertise;
use App\User;
use App\AdvertiseDoctor;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class CheckoutController extends Controller
{
    public function checkout($id)
    {
        /* chiave privata stripe */
        \Stripe\Stripe::setApiKey('sk_test_51J5WAhDHGqBrI8m3Mo6TXBjWPZVxFh9QweTMjO2SeZ0rNxysr3bPfERG5GOGZLLDKsFAKlfomukSmlLKai2ZbQRR00qcHhEhRA');
        $user = User::where('id', Auth::id())->first();
        $ad = Advertise::where('id', $id)->first();

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => `Advertise $ad->type pack`,
            'amount' => (int) ($ad->price * 100),
            'currency' => 'usd',
            'description' => `Payment From $user->name $user->lastname`,
            'payment_method_types' => ['card'],
        ]);

        $data = [
            'intent' => $payment_intent->client_secret,
            'ad' => $ad
        ];

        return view('partials-dashboard.checkout-credit-card', $data);
    }

    public function afterPayment($id)
    {
        echo 'Payment has been received';
        $ad = Advertise::where('id', $id)->first();
        $ad_time = $ad->hours / 24;
        $currentDate = date("Y-m-d");
        $new_advertise_doctor = new AdvertiseDoctor();
        $new_advertise_doctor->advertise_id = $id;
        $new_advertise_doctor->doctor_id = Auth::id();
        $new_advertise_doctor->payment_status = 'accettato';
        $new_advertise_doctor->start_ads_date = $currentDate;
        $new_advertise_doctor->end_ads_date = date('Y-m-d', strtotime($currentDate . '+' . $ad_time .'days'));
        $new_advertise_doctor->save();
    }
}

/* Card Number - 4242 4242 4242 4242
EXP - 12/32
CVV - 123
ZIP - 12345 */