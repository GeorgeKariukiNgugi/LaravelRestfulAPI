<?php

namespace App\Http\Controllers;

use App\model\Cart;
use Illuminate\Http\Request;
use App\Http\Resources\Cart\cartResource;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return cartResource::collection(Cart::all());
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
        $cart = new Cart();
        $cart->productId = $request->productId;
        $cart->quantity =   $request->quantity;

        $cart->save();
        
        return response(cartResource::collection(Cart::all()),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return response(new cartResource($cart),201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $cart->update($request->all());
        return response(cartResource::collection(Cart::all()),201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return response(cartResource::collection(Cart::all()),201);
    }

    public function unique(){
        
    }
}
