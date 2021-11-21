<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all product info
        $product = Product::all();
        return response()->json($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //no used
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert new record to db
        $request->validate([
            'code' => 'required|max:9',
            'name' => 'required|max:90',
            'category' => 'required|max:28'
          ]);
        
          $addProduct = new Product([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'category' => $request->get('category'),
            'brand' => $request->get('brand'),
            'type' => $request->get('type'),
            'description' => $request->get('description')
          ]);
        
          $addProduct->save();
        
          return response()->json($addProduct);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get specific product info
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //no used
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
        //update existing record into db
        $editProduct = Product::findOrFail($id);

        $request->validate([
            'code' => 'required|max:9',
            'name' => 'required|max:90',
            'category' => 'required|max:28'
        ]);
      
        $editProduct->code = $request->get('code');
        $editProduct->name = $request->get('name');
        $editProduct->category = $request->get('category');
        $editProduct->brand = $request->get('brand');
        $editProduct->type = $request->get('type');
        $editProduct->description = $request->get('description');

        $editProduct->save();
      
        return response()->json($editProduct);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete selected record from db
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();
      
        return response()->json($deleteProduct::all());
    }
}
