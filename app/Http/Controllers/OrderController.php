<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Cart;

class OrderController extends Controller
{
    public function addOrder(Request $request){
        //return $request->order_quantity;
        $offer = Offer::find($request->offer_id);
        Cart::add([
            'id' => $offer->id,
            'name' => $offer->offer_name,
            'price' => $offer->price,
            'qty' => $request->order_quantity,
            'options' =>[
                'image'=> $offer->offer_img
            ]
        ]);
        return redirect('/show-order');
    }

    public function showOrder(){
        $cartOrders = Cart::content();
        return view('fornt.order.show-order', ['cartOrders'=> $cartOrders]);
    }

    public function deleteOrder($id){
        Cart::remove($id);
        return redirect('/show-order');
    }
}
