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
        if ($id != null && Order::where('id', $id)->exists()) {
            $title = "Orders";
            $order = Order::find($id);
            return view('admin.orders.view', compact('title', 'order'));
        }
        return redirect()->route('admin.orders');
    }

    public function changeStatus(Request $request)
    {
        Order::whereIn('id', $request->order_ids)->update(['status' => $request->status]);
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('admin.orders.partials.order-listings', compact('orders'));
    }
}
