<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Status;
use Inertia\Inertia;
use PhpParser\Node\Stmt\TryCatch;

class MyOrdersController extends Controller
{
    public function index(Request $request)
    {   
        $id = $request->user()->id;

        // dd();
       
        return Inertia::render('MyOrders', [
            'orders' => Order::where('user_id', $id)->with(['products:id,name', 'status:id,name'])->get(),
        ]);
    }


    public function update(Request $request)
    {
        

        return  Redirect::route('orders.index');
    }

    public function show(Request $request, $id)
    {
        $userId = $request->user()->id;
        $order = Order::where('id', $id)->with('user:id')->get('user_id');

        try {
            $userId !== $order[0]->user_id;
        } catch (\Throwable $th) {
            abort(403);

        }
        
        return Inertia::render('MyOrders', [
            'orders' => Order::where('user_id', $userId)->with(['products:id,name', 'status:id,name'])->get(),
            'selected' => Order::where('id', $id)->with(['products', 'status:id,name'])->get(),
        ]);
    }
   

    
    public function destroy(Order $order)
    {
        $order->delete();

        return  Redirect::route('orders.index');
    }
}
