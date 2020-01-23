<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;
use App\Orders;


class OrdersController extends Controller
{
    public function store(Request $request)
    {
        if (auth()->user()){
            $this->validate($request,[
                'user' => 'required|numeric',
                'product' => 'required|numeric',
            ]);
            $order = new Orders();
            $order->user = $request->user;
            $order->product = $request->product;
            $order->save();
            echo "All is Good";
        } else{
            echo "UnAuthorized";
        }
    }

    public function update(Request $request)
    {
        if (auth()->user()){
            $this->validate($request,[
                'user'          => 'required|numeric',
                'product'       => 'required|numeric'
            ]);
            Orders::where('id',$request->id)->update([
                "user"          => $request->user,
                "product"       => $request->product
            ]);
            echo "All is updated";
        } else{
            echo "UnAuthorized";
        }
    }

    public function delete(Request $request)
    {
        if(auth()->user()) {
            Orders::where('id',$request->id)->delete();
            echo "Order Deleted Successfully";
        } else {
            echo "UnAuthorized";
        }
        
    }
}
