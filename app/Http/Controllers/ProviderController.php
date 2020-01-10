<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Provider;
use App\Company;
use Illuminate\Http\Request;

class ProviderController extends Controller
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
        //
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $pro=DB::table('providers')->where('fullname','LIKE','%'.$query.'%')
            ->where ('is_active','=','1')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('provider.index',["pro"=>$pro,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $company = Company::all();
        return view('provider.create',compact('company'));
    
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
        $provider = Provider::create($request->all());
        return view('provider.show',compact('provider'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $provider = Provider::findOrFail($id);
        return view('provider.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $company = Company::all();
        $provider = Provider::findOrFail($id);
        return view('provider.edit',compact('provider','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $provider = Provider::find($id);
        $provider->update($request->all());
        return view('provider.show',compact('provider'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider= Provider::findOrFail($id);
        $provider->is_active = '0';
        $provider->update();
         return redirect('provider');
        
    }
}
