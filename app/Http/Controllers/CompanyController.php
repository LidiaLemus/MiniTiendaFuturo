<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
            $compa=DB::table('companies')->where('name','LIKE','%'.$query.'%')
            ->where ('is_active','=','1')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('company.index',["compa"=>$compa,"searchText"=>$query]);
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
        return view('company.create');
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
        $company = Company::create($request->all());
        return view('company.show',compact('company'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $company = Company::findOrFail($id);
        return view('company.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $company = Company::findOrFail($id);
        return view('company.edit',compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $company = Company::find($id);
        $company->update($request->all());
        return view('company.show',compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Company::find($id)->delete();
        $company = Company::all();
        return view('company.index',compact('company'));
    }
}
