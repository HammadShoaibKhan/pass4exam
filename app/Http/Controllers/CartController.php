<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $title = "Shoping Cart";

        $carts = session()->get('carts',[]);
        return view('cart', compact('title','carts'));
    }

    public function addToCart(Request $request){
        $carts=[
            $request->bundleType => [
                "shop_type" =>  $request->shop_type,
                "bundleType"=>  $request->bundleType,
                "bundleIcon"=>  $request->bundleIcon,
                "bundle_name"=>  $request->bundle_name,
                "orignalPrice"=>  $request->orignalPrice,
                "discountedPrice"=>  $request->discountedPrice,
                "checkout_price"=>  $request->checkout_price,
                "bundle_type"=>  $request->bundle_type,
                "bundle_id"=>  $request->bundle_id,
                "individual_price_inc"=>  $request->individual_price_inc,
            ]
        ];
        session()->put('carts', $carts);
        return redirect()->route('cart_view');;
    }
}
