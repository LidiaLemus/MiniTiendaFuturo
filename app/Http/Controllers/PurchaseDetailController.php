<?php

namespace App\Http\Controllers;



use App\Purchase_Detail;
use App\Purchase;
use App\Provider;
use App\Product;

use Illuminate\Http\Request;

class PurchaseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $purchase_Detail = Purchase_Detail::all();

        return view('purchase_Detail.index',compact('purchase_Detail'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    
        $purchase = Purchase::all(); 
        $provider = Provider::all();
        $product = Product::all();
        return view('purchase_Detail.create',compact('purchase','provider','product'));
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

        $purchase_Detail = Purchase_Detail::create($request->all());
        return view('purchase_Detail.show',compact('purchase_Detail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase_Detail  $purchase_Detail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $purchase_Detail = Purchase_Detail::findOrFail($id);
        return view('purchase_Detail.show',compact('purchase_Detail'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase_Detail  $purchase_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $purchase = Purchase::all();
        $provider = Provider::all();
        $product = Product::all();
        $purchase_Detail = Purchase_Detail::findOrFail($id);
        return view('purchase_Detail.edit',compact('purchase_Detail','purchase','provider','product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase_Detail  $purchase_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $purchase_Detail = Purchase_Detail::find($id);
        $purchase_Detail->update($request->all());
        return view('purchase_Detail.show',compact('purchase_Detail'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase_Detail  $purchase_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase_Detail $purchase_Detail)
    {
        //
    }
}
