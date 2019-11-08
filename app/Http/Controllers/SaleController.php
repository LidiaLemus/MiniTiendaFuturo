<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Employee;
use App\Customer;
use App\Product;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $sale = Sale::all();

        return view('sale.index',compact('sale'));

        
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
        $p = Product::all();
        $employee = Employee::all(); 
        $customer = Customer::all();
        return view('sale.create',compact('employee','customer','product','p'));
    

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

        $sale = Sale::create($request->all());
        return view('sale.show',compact('sale'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $sale = Sale::findOrFail($id);
        return view('sale.show',compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employee::all();
        $customer = Customer::all();
        $sale = Sale::findOrFail($id);
        return view('sale.edit',compact('sale','employee','customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $sale = Sale::find($id);
        $sale->update($request->all());
        return view('sale.show',compact('sale'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Sale::find($id)->delete();
        $sale = Sale::all();
        return view('sale.index',compact('sale'));
    }

  
}
