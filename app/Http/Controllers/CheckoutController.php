<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderReceived;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
                    'status_id' => 1,
                    // dd($payment->charges->data[0]->amount),
                    'total' => $payment->charges->data[0]->amount,
                ]);

            $items = json_decode($request->input('cart'), true);
            foreach ($items as $item) {
                $order->products()
                    ->attach($item['item']['id'], ['quantity' => $item['qty']]);
            }

            Mail::to($user)->send(new OrderReceived($items));
            
            $order->load('products');

            $cart = new ProductController;
            $cart->destroyCart();

            $request->session()->flash('flash.banner', 'Your order has been recieved, Please check your emails!');
            $request->session()->flash('flash.bannerStyle', 'success');

            return Redirect::back();
            

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

    }
}
