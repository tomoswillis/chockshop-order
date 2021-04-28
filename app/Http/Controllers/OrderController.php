<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Status;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return Inertia::render('Orders', [
            'orders' => Order::with(['user:id,name,email', 'products:id,name', 'status:id,name'])->get(),
            'status-list' => Status::all(),
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
