<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Status;
use App\Models\User;
use App\Mail\OrderApproved;
use FontLib\Table\Type\name;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
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
   
    public function updateStatus(Request $request, $id, $status)
    {   
        $order = Order::find($id);

        if ($status == 2) {
            $order->status_id = '2';
            $order->save();

            $userId = $order->user_id;
            $user = User::find($userId);
            $user = [
                'name' => $user->name,
                'email' => $user->email,
            ];

            Mail::to($user['email'])->send(new OrderApproved($order));

            $request->session()->flash('flash.banner', 'Order Updated');
            $request->session()->flash('flash.bannerStyle', 'success');

        } elseif ($status == 4 ){
            $order->status_id = '4';
            $order->save();

            $request->session()->flash('flash.banner', 'Order has been cancelled');
            $request->session()->flash('flash.bannerStyle', 'danger');
        }
       
        return  Redirect::back();
    }
    
    public function destroy(Order $order)
    {
        $order->delete();

        return  Redirect::route('orders.index');
    }
}
