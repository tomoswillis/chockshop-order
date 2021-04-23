<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {

        return Inertia::render('Checkout', [
            'stripe_key' => env('STRIPE_KEY'),
        ]);
    }

    public function purchase(Request $request)
    {
        // $user = User::firstOrCreate(
        //     [
        //         'email' => 'admin@admin.com'
        //     ],
        //     [
        //         'password' => Hash::make(Str::random(12)),
        //         'name' => $request->input('first_name') . ' ' . $request->input('last_name'),
        //         'address' => $request->input('address'),
        //         'city' => $request->input('city'),
        //         'state' => $request->input('state'),
        //         'zip_code' => $request->input('zip_code')
        //     ]
        // );

        $user = $request->user();
        
        

        try {
            $user->createOrGetStripeCustomer();
            $payment = $user->charge(
                $request->input('amount'),
                $request->input('payment_method_id')
            );

            $payment = $payment->asStripePaymentIntent();
            $order = $user->orders()
                ->create([
                    'transaction_id' => $payment->charges->data[0]->id,
                    // dd($payment->charges->data[0]->amount),
                    'total' => $payment->charges->data[0]->amount,
                ]);

            $items = json_decode($request->input('cart'), true);
            foreach ($items as $item) {
                $order->products()
                    ->attach($item['item']['id'], ['quantity' => $item['qty']]);
            }

            $order->load('products');
            // return $order;
            return  Redirect::back();
            

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

    }
}
