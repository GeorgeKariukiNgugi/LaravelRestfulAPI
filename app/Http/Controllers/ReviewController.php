<?php

namespace App\Http\Controllers;

use App\model\Review;
use App\model\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Reviews\ReviewResource;
use App\Http\Requests\addingAReview;
use App\Http\Requests\updatingAReview;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return ReviewResource::collection($product->reviews);
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
    public function store(addingAReview $request)
    {
        // return "Hit the storing api endpoint";
        $newReview = new Review();
        $newReview->productId= $request->productId;
        $newReview->review= $request->review;
        $newReview->customerName= $request->customerName;
        $newReview->star= $request->star;

        $newReview->save();

        return response(
            null,201
        );
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,Review $review)
    {        
     
        return new ReviewResource($review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(updatingAReview $request, Product $product, Review $review)
    {
        $review->update($request->all());

        return response(null, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy( Product $product, Review $review)
    {
        $review->delete();
        return response(null,204);
    }
}
