<?php

namespace App\Http\Controllers;

use App\Stocktaking;
use App\Product;
use Illuminate\Http\Request;

class StocktakingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stocktaking = Stocktaking::all();
        
        return view('stocktaking.index',compact('stocktaking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product = Product::all(); 
        return view('stocktaking.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $stocktaking = Stocktaking::create($request->all());
        return view('stocktaking.show',compact('stocktaking'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stocktaking  $stocktaking
     * @return \Illuminate\Http\Response
     */
    public function show(Stocktaking $stocktaking)
    {
        //
        $stocktaking = Stocktaking::findOrFail($id);
        return view('stocktaking.show',compact('stocktaking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stocktaking  $stocktaking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::all();
        $stocktaking = Stocktaking::findOrFail($id);
        return view('stocktaking.edit',compact('stocktaking','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stocktaking  $stocktaking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $stocktaking = Stocktaking::find($id);
        $stocktaking->update($request->all());
        return view('stocktaking.show',compact('stocktaking'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stocktaking  $stocktaking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stocktaking $stocktaking)
    {
        //
    }
}
