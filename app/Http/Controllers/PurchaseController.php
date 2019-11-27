<?php

namespace App\Http\Controllers;
use App\Purchase_Detail;
use App\Purchase;
use App\Product;
use App\Provider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PurchaseController extends Controller
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
        $provider = Provider::all();
        $purchase = Purchase::all();
        return view('purchase.index',compact('purchase','provider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $provider = Provider::all();
        return view('purchase.create',compact('provider','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
             $compra = new Purchase;
             $compra->total = $request->get('suma_total');
             $compra->saveOrFail();
             
             $provider = $request->get('provider_id');
             $product_id = $request->get('id_producto');
             $cantidad = $request->get('cantidad');
             $purchase_price = $request->get('precio_compra');
             $subtotal = $request->get('subtotal');

            $cont = 0;
            while($cont < count($product_id)){
                $detalle = new Purchase_Detail;
                $detalle->quantity = $cantidad[$cont];
                $detalle->price = $purchase_price[$cont];
                $detalle->subtotal = $subtotal[$cont];
                $detalle->purchase_id = $compra->id;
                $detalle->provider_id = $provider;
                $detalle->product_id = $product_id[$cont];
                $detalle->saveOrFail();
                
                $cont = $cont + 1;
            }
                DB::commit();
        }catch(\Exception $e){
            DB::rollback();
        }
        return redirect('purchase');     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pur = DB::table('purchases as p')
            ->join('purchase__details as pur', 'p.id', '=', 'pur.purchase_id')
            ->select('p.id as id', 'p.created_at as fecha','p.total as total')
            ->where('p.id', '=', $id)
            ->first();

        $detail = DB::table('purchase__details as purc')
            ->join('products as p', 'purc.product_id', '=', 'p.id')
            ->join('purchases as pu','purc.purchase_id','=','pu.id')
            ->join('providers as pro','purc.provider_id','=','pro.id')
            ->select('p.name as nombres', 'purc.quantity as quantity', 'purc.price as price', 'purc.subtotal as subtotal','pro.fullname as fullname')
            ->where('purc.purchase_id', '=', $id)
            ->get();

        return view("purchase.show", ["detail" => $detail, "pur" => $pur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $purchase = Purchase::findOrFail($id);
        return view('purchase.edit',compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $purchase = Purchase::find($id);
        $purchase->update($request->all());
        return view('purchase.show',compact('purchase'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Purchase::find($id)->delete();
        $purchase = Purchase::all();
        return view('purchase.index',compact('purchase'));
    }
}
