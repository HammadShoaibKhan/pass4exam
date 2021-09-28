<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $title = "Shoping Cart";

        $carts = session()->get('carts',[]);
        dd($carts);
        return view('cart', compact('title','carts'));
    }

    public function addToCart(Request $request){
        // session()->unset('carts');
            unset($_SESSION['carts']);

        $carts = session()->get('carts',[]);
        if(count($carts)<1){
           session()->unset('carts');
            $carts = [
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
        }
        else{
            $newCart = [
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
            array_push($carts, $newCart);
        }
        session()->put('carts', $carts);
        return redirect()->route('cart_view');;
    }
}
