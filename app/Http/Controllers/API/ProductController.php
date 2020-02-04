<?php

namespace App\Http\Controllers\API;

use App\Category;
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
    //show sản phẩm
    public function index()
    {
        $new = Product::latest()->take(3)->get();
        $sale = Product::where('sale', '>', '0')->get();
        $cat_parent = Category::where('slug', 'product')->get();
        $cat_pro = Category::where('parent_id', $cat_parent[0]->id)->get();
        $i=0;
        while($i<count($cat_pro)) {
            $pro= Category::join('products', 'categories.id', '=', 'products.cat_id')->where('cat_id', $cat_pro[$i]->id)->get();
            $product=[
            'name_cat'=>$cat_pro[$i]->name_cat,
            'pro'=> $pro ];
            $products[]=$product;
            $i++;
        }
        return $this->sendResponse([
            'new' => $new,
            'sale' => $sale,
            'cat' => $cat_pro,
            'product' => $products
        ], 'Products retrieved successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request, Product $product)
    // {
    //     $input = $request->all();
    //     $validate = Validator::make($input, [
    //         'name' => 'required',
    //         'detail' => 'required'
    //     ]);
    //     if ($validate->fails()) {
    //         return $this->sendError('Validation error.', $validate->errors());
    //     }
    //     $product->name = $input['name'];
    //     $product->detail = $input['detail'];
    //     return $this->sendResponse($product->toArray(), 'Product created successfully');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //thêm sản phẩm
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'cat_id'=>'required',
                'name' => 'required',
                'description' => 'required',
                'detail' => 'required',
                'qty' => 'required',
                'photo' => 'required',
                'price' => 'required',
                'sale' => 'required',
                'status' => 'required'

            ]
        );
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $product = Product::create($input);
        return $this->sendResponse($product->toArray(), 'Product Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    //chi tiết sản phẩm
    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return $this->sendError('Product Not Found.');
        }
        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    //cập nhật sản phẩm
    public function update(Request $request, Product $product, $id)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'cat_id'=>'required',
                'name' => 'required',
                'description' => 'required',
                'detail' => 'required',
                'qty' => 'required',
                'photo' => 'required',
                'price' => 'required',
                'sale' => 'required',
                'status' => 'required'

            ]
        );
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $product=Product::find($id);
        $product->cat_id=$input['cat_id'];
        $product->name=$input['name'];
        $product->description=$input['description'];
        $product->detail=$input['detail'];
        $product->qty=$input['qty'];
        $product->photo=$input['photo'];
        $product->price=$input['price'];
        $product->sale=$input['sale'];
        $product->status=$input['status'];
        $product->save();
        return $this->sendResponse($product->toArray(), 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    //xóa sản phẩm
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->sendResponse($product->toArray(), 'Product deleted successfully');
    }
}
