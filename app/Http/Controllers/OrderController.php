<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;
use App\Orders;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            echo "bad";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
        // if (auth()->user()){
            
        //     // $this->validate($request,[
        //     //     'user'          => 'required|numeric',
        //     //     'product'       => 'required|numeric'
        //     // ]);
        //     // Orders::where('id',$id)->update([
        //     //     "user"          => $request->input('user'),
        //     //     "product"       => $request->input('product')
        //     // ]);
        //     // echo "All is updated";
        // } else{
        //     echo "bad";
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
