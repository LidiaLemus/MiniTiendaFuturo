<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
            $emplo=DB::table('employees')->where('fullname','LIKE','%'.$query.'%')
            ->where ('is_active','=','1')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('employee.index',["emplo"=>$emplo,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
        $employee = Employee::create($request->all());
        return view('employee.show',compact('employee'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::findOrFail($id);
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employee::findOrFail($id);
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $employee = Employee::find($id);
        $employee->update($request->all());
        return view('employee.show',compact('employee'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Employee::find($id)->delete();
        $employee = Employee::all();
        return view('employee.index',compact('employee'));
    }
}
