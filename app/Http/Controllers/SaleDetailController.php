<?php

namespace App\Http\Controllers;
use App\Product;
use App\Sale;
use App\SaleDetail;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sale_detail = SaleDetail::all();

        return view('sale_detail.index',compact('sale_detail'));

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
        return view('sale_detail.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $sale_detail = SaleDetail::create($request->all());
        return view('sale_detail.show',compact('sale_detail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SaleDetail  $product_has_Sale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $sale_detail = SaleDetail::findOrFail($id);
        return view('sale_detail.show',compact('sale_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaleDetail  $product_has_Sale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaleDetai  $product_has_Sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaleDetail  $product_has_Sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
