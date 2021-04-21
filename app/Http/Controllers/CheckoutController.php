<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Cart;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        return Inertia::render('Checkout', [
            'stripe_key' => env('STRIPE_KEY'),
        ]);
    }
}
