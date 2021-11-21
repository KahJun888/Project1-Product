<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listing
        $allProductInfo = Product::paginate(10); 
        return view('productListing', compact('allProductInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add new record
        return view('ProductAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store add new record to db
        $rules = [
			'code' => 'required|string|min:1|max:9',
			'name' => 'required|string|min:1|max:90',
			'category' => 'required|string|min:1|max:28'
		];
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return redirect('product/create')->withInput()->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$product = new Product;
                $product->code = $data['code'];
                $product->name = $data['name'];
				$product->category = $data['category'];
				$product->brand = $data['brand'];
                $product->type = $data['type'];
                $product->description = $data['description'];
				$product->save();
				return redirect('product/create')->with('status',"Product Insert successfully");
			}
			catch(Exception $e){
				return redirect('product/create')->with('failed',"Operation failed");
			}
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
        //show the search id record
        $selectedProductInfo = Product::where(['id'=>$id])->get();  //get single product data
        return view('selectedProduct', compact('selectedProductInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit record view
        $editProductInfo = Product::where(['id'=>$id])->get();  //get single product data
        return view('productEdit', compact('editProductInfo'));
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
        //update edit record to db
        $product = Product::find($id);
        $product->code = $request->input('code');
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->brand = $request->input('brand');
        $product->type =  $request->input('type');
        $product->description = $request->input('description');
        $product->update();
        return redirect('product/'.$id)->with('status','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete the selected record
        $product = Product::find($id);
        $product->delete();
        return redirect('product')->with('status','Product Deleted Successfully');
    }
}
