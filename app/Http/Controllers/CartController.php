<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use App\Models\Vendor;
use App\Models\Exam;

class CartController extends Controller
{
    public function index(){
        $title = "Shoping Cart";

        $carts = session()->get('carts',[]);
        // dd($carts);
        return view('cart', compact('title','carts'));
    }

    public function addToCart(Request $request){
        // session()->put('carts', array());
        // session()->forget('carts');
        // session()->flush();

        $carts = session()->get('carts',[]);
        
        if(count($carts)<1){
            $carts[0] = [
                "bundle_type"=>  $request->bundle_type,
                "bundle_title" =>  $request->bundle_title,
                "vendor_id" =>  $request->vendor_id,
                "certificate_id" =>  ($request->certificate_id) ? $request->certificate_id:'',
                "exam_code" =>  ($request->exam_code) ? $request->exam_code:'',
                // "bundleIcon"=>  $request->bundleIcon,
                "orignalPrice"=>  $request->orignalPrice,
                "discountedPrice"=>  $request->discountedPrice,
                "subcribed_for"=>  $request->subcribed_for,
            ];
        }
        else
        {
            $update_flag = 0;
            foreach ($carts as  $key => $cart) {
                if( ( (($cart['exam_code'] != "") && $cart['exam_code'] == $request->exam_code) && ($cart['bundle_type'] == $request->bundle_type) ) || 
                    ( ($cart['vendor_id'] == $request->vendor_id) && ($cart['bundle_type'] == $request->bundle_type) ) 
                )
                {
                    // if(($cart['exam_code'] != "")){
                    //     if($cart['vendor_id'] == $cart['vendor_id'])
                    // }
                    $carts[$key] = [
                        "bundle_type"=>  $request->bundle_type,
                        "bundle_title" =>  $request->bundle_title,
                        "vendor_id" =>  $request->vendor_id,
                        "certificate_id" =>  ($request->certificate_id) ? $request->certificate_id:'',
                        "exam_code" =>  ($request->exam_code) ? $request->exam_code:'',
                        // "bundleIcon"=>  $request->bundleIcon,
                        "orignalPrice"=>  $request->orignalPrice,
                        "discountedPrice"=>  $request->discountedPrice,
                        "subcribed_for"=>  $request->subcribed_for,
                    ];

                    $update_flag = 1;
                }
            }

            if($update_flag == 0){
                $newCart = [
                    "bundle_type"=>  $request->bundle_type,
                    "bundle_title" =>  $request->bundle_title,
                    "vendor_id" =>  $request->vendor_id,
                    "certificate_id" =>  ($request->certificate_id) ? $request->certificate_id:'',
                    "exam_code" =>  ($request->exam_code) ? $request->exam_code:'',
                    // "bundleIcon"=>  $request->bundleIcon,
                    "orignalPrice"=>  $request->orignalPrice,
                    "discountedPrice"=>  $request->discountedPrice,
                    "subcribed_for"=>  $request->subcribed_for,
                ];
                array_push($carts, $newCart);

            }
        //     $newCart = [
        //         "bundle_type"=>  $request->bundle_type,
        //         "bundle_title" =>  $request->bundle_title,
        //         "vendor_id" =>  $request->vendor_id,
        //         "certificate_id" =>  ($request->certificate_id) ? $request->certificate_id:'',
        //         "exam_code" =>  ($request->exam_code) ? $request->exam_code:'',
        //         // "bundleIcon"=>  $request->bundleIcon,
        //         "orignalPrice"=>  $request->orignalPrice,
        //         "discountedPrice"=>  $request->discountedPrice,
        //         "subcribed_for"=>  $request->subcribed_for,
        //     ];
        //     array_push($carts, $newCart);
        }
        session()->put('carts', $carts);
        // dd();
        return redirect()->route('cart_view');
    }
    public function removeCart($id = null, $bundle_type = null){
        if ( ( $id != null && (Vendor::where('id', $id)->exists() || Exam::where('exam_code', $id)->exists()) )
            && ($bundle_type != null)
        ){
            $carts = session()->get('carts',[]);
            if(count($carts)>=1){
                foreach ($carts as  $key => $cart) {
                    if( ( ($cart['vendor_id'] == $id || $cart['exam_code'] == $id ) 
                        && ($cart['bundle_type'] == $bundle_type) ))
                    {
                        unset($carts[$key]);
                        session()->put('carts', $carts);
                        break;
                    }
                }
            }
        }
        return redirect()->route('cart_view');
        // return redirect()->back();
    }
}
