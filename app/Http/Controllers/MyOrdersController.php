<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Status;
use Inertia\Inertia;

class MyOrdersController extends Controller
{
    public function index(Request $request)
    {   
        $id = $request->user()->id;

        // dd();
       
        return Inertia::render('MyOrders', [
            'orders' => Order::where('user_id', $id)->with(['user:id,name,email', 'products:id,name', 'status:id,name'])->get(),
        ]);
    }


    public function update(Request $request)
    {
        

        return  Redirect::route('orders.index');
    }
   

    
    public function destroy(Order $order)
    {
        $order->delete();

        return  Redirect::route('orders.index');
    }
}
