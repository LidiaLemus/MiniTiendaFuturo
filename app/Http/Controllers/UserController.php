<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        User::find($id)->delete();
        $user = User::all();
        return view('user.index',compact('user'));

    }
}
