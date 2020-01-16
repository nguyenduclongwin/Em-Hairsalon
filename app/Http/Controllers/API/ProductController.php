<?php

namespace App\Http\Controllers\API;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Validator;
class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return $this->sendResponse($product->toArray(),'Products retrieved successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Product $product)
    {
        $input=$request->all();
        $validate=Validator::make($input,[
            'name'=>'required',
            'detail'=>'required'
        ]);
        if($validate->fails()){
            return $this->sendError('Validation error.',$validate->errors());
        }
        $product->name=$input['name'];
        $product->detail=$input['detail'];
        return $this->sendResponse($product->toArray(),'Product created successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,
        [
            'name'=>'required',
            'detail'=>'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.',$validator->errors());
        }
        $product=Product::create($input);
        return $this->sendResponse($product->toArray(),'Product Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        if(is_null($product)){
            return $this->sendError('Product Not Found.');
        }
        return $this->sendResponse($product->toArray(),'Product retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'name'=>'required',
            'detail'=>'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error',$validator->errors());
        }
        $product=Product::find($id);
        $product->name=$input['name'];
        $product->detail=$input['detail'];
        $product->save();
        return $this->sendResponse($product->toArray(),'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $product->delete();
        return $this->sendResponse($product->toArray(),'Product deleted successfully');
    }
}
