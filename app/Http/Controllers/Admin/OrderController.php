<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index()
    {
        $title = "Orders";
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('admin.orders.index', compact('title','orders'));
    }
    function orderView($id=null){
        dd($id);
        return null;
    }
    public function changeStatus(Request $request)
    {
        Order::whereIn('id', $request->order_ids)->update(['status' => $request->status]);
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('admin.orders.partials.order-listings', compact('orders'));
    }

}
