<?php

namespace App\Http\Controllers;

use App\SaleDetail;
use App\Sale;
use App\Employee;
use App\Customer;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaleController extends Controller
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

        $sale = Sale::all();

        return view('sale.index', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $p = Product::all();
        $employee = Employee::all();
        $customer = Customer::all();
        return view('sale.create', compact('employee', 'customer', 'product', 'p'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $venta = new Sale;
            $venta->total = $request->get('suma_total');
            $venta->employee_id = $request->get('employee_id');
            $venta->customer_id = $request->get('customer_id');
            $venta->saveOrFail();

            $product_id = $request->get('id_producto');
            $cantidad = $request->get('cantidad');
            $sale_price = $request->get('precio_venta');
            $subtotal = $request->get('subtotal');

            $cont = 0;
            while ($cont < count($product_id)) {
                $detalle = new SaleDetail;
                $detalle->price = $sale_price[$cont];
                $detalle->quantity = $cantidad[$cont];
                $detalle->subtotal = $subtotal[$cont];
                $detalle->sale_id = $venta->id;
                $detalle->product_id = $product_id[$cont];
                $detalle->saveOrFail();

                $cont = $cont + 1;
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect('sale');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salese = DB::table('sales as s')
            ->join('employees as emplo', 's.employee_id', '=', 'emplo.id')
            ->join('customers as c', 's.customer_id', '=', 'c.id')
            ->join('product_has__sales as d', 's.id', '=', 'd.sale_id')
            ->select('s.id as id', 's.created_at as fecha', 'emplo.fullname as empleado', 'c.fullname as cliente','s.total as total')
            ->where('s.id', '=', $id)
            ->first();

        $detallese = DB::table('product_has__sales as d')
            ->join('products as p', 'd.product_id', '=', 'p.id')
            ->select('p.name as nombres', 'd.quantity as quantity', 'd.price as price', 'd.subtotal as subtotal')
            ->where('d.sale_id', '=', $id)
            ->get();

        return view("sale.show", ["detallese" => $detallese, "salese" => $salese]);
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
        return view('sale.edit', compact('sale', 'employee', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $sale = Sale::find($id);
        $sale->update($request->all());
        return view('sale.show', compact('sale'));
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
        return view('sale.index', compact('sale'));
    }
}
