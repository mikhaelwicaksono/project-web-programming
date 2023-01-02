<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('home',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'insert-product_name'=>'required',
            'insert-description'=>'required',
            'insert-price'=>'required',
            'insert-stock'=>'required',
            'insert-image'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $imageFile = $request->file('insert-image');
        $imageName = time().'.'.
        $imageFile->getClientOriginalExtension();
        Storage::putFileAs('public/images',$imageFile,$imageName);

        DB::table('products')->insert([
            'products_name'=> $request->get('insert-product_name'),
            'description'=> $request->get('insert-description'),
            'price'=> $request->get('insert-price'),
            'stock'=> $request->get('insert-stock'),
            'image'=> $imageName
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $product
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $target = DB::table('products')->where('product_id','like',$product_id)->get();
        return view('home',['target'=>$target]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy ($product_id)
    {
        //
    }
}
