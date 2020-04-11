<?php

namespace App\Http\Controllers;

use App\model\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductsCollectionResource;
use App\Http\Requests\addingProduct;
use App\Http\Requests\udatingProduct;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return new ProductResource(Product::all()->get());
        return ProductsCollectionResource::collection(Product::paginate(5));
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
    public function store(addingProduct $request)
    {
        $newProduct = new Product();
        $newProduct->name= $request->name;
        $newProduct->description= $request->description;
        $newProduct->price = $request->price;
        $newProduct->discount= $request->discount;
        $newProduct->stock= $request->stock;

        $newProduct->save();

        return response([
            'data'=> new ProductsCollectionResource($newProduct)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        // return $product;
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Product  $product
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
     * @param  \App\model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(udatingProduct $request, Product $product)
    {

        $product->update($request->all());
        return response(
          ['data'=> new ProductsCollectionResource($product)
        ], 201);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response(
            null, 204
        );
    }
}
