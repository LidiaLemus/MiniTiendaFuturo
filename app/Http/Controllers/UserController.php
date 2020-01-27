<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pdf(){

        $users = User::all();
        $pdf = PDF::loadView('pdf.users',compact('users'));
        return $pdf->download('listado.pdf');
            
    }
    public function index(Request $request){
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $users=DB::table('users')->where('name','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('user.index',["users"=>$users,"searchText"=>$query]);
        }
    }

    public function create(){
        return view('user.create');

    }

    public function store(Request $request){
        User::create([
            'name' => request('name'),
            'email' => request()->email,
            'password' => bcrypt(request()->get('password'))
        ]);
        return view('user.show',compact('user'));

    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('user.show',compact('user'));

    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.edit',compact('user'));

    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return view('user.show',compact('user'));

    }
    public function destroy($id){

       $user= User::findOrFail($id);
       $user->is_active = '0';
       $user->update();
        return redirect('user');
    }
}
