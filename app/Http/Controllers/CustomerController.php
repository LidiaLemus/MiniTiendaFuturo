<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Customer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CustomerController extends Controller
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
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $cust=DB::table('customers')->where('fullname','LIKE','%'.$query.'%')
            ->where ('is_active','=','1')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('customer.index',["cust"=>$cust,"searchText"=>$query]);
        }
    }

    public function pdf(){

        $customers = Customer::all();
        $pdf = PDF::loadView('pdf.customers',compact('customers'));
        return $pdf->download('listado.pdf');
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return view('customer.show',compact('customer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return view('customer.show',compact('customer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $customer = Customer::findOrFail($id);
      $customer->is_active = '0';
      $customer->update();
      return redirect('customer');
    }
}
