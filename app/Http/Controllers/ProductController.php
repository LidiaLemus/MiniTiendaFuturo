<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
class ProductController extends Controller
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
            $pro=DB::table('products')->where('name','LIKE','%'.$query.'%')
            ->where ('is_active','=','1')
            ->orderBy('id','DESC')
            ->paginate(5);
            return view('product.index',["pro"=>$pro,"searchText"=>$query]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *Esta funcion la creamos para que ingrese un nuevo producto.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creamos una variable, llamamos al modelo creamos un nuevo
        //producto y que al ingresar el dato lo mande ala vista de la carpeta
        //en el archivo show.
        $product = Product::create($request->all());
        return view('product.show',compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    public function pdf(){

        $products = Product::all();
        $date = date('Y-m-d');
        $pdf = PDF::loadView('pdf.products',compact('products','date'));
        return $pdf->download('listado.pdf');
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $product = Product::find($id);
        $product->update($request->all());
        return view('product.show',compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product= Product::findOrFail($id);
        $product->is_active = '0';
        $product->update();
         return redirect('product');
    }
}
