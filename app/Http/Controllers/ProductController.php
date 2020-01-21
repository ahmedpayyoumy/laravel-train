<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= DB::table('product')
                    ->select('product.*','category.name as cat_name')
                    ->join('category', 'category.id', '=', 'product.category_id')
                    -> orderBy('id','desc')
                    ->paginate(10);
        return view('products.main')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.add')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'product_name'  => 'required',
            'category'      => 'required|not_in:0'
        ]);
        $product = new Product();
        $product->name = $request->input('product_name');
        $product->category_id = $request->input('category');
        $product->save();
        return redirect(route('products.index'))->with('msg','Product was addedd successfully');
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
        $data['categories'] = Category::all();
        $data['product'] = Product::find($id);
        return view('products.edit',['data'=>$data]);
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
        $this->validate($request,[
            'product_name'  => 'required',
            'category'      => 'required|not_in:0'
        ]);
        Product::where('id',$id)->update([
            "name"          => $request->input('product_name'),
            "category_id"   => $request->input('category')
        ]);
        return redirect(route('products.index'))->with('msg',"Product Edited Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect(route('products.index'))->with('msg',"Product Deleted Successfully!");
    }
}
