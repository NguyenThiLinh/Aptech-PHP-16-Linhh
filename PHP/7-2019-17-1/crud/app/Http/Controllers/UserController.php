<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', ['users'=> $users]);
    }
    public function show($id){
     
        $user = User::find($id);
        return view('users.show', ['user'=> $user]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        /*$user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();*/
        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => $request -> password,
        ]);
        return redirect()->route('users.index');
    }
    
    public function edit($id){
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        /*$user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();*/
        $user -> update([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => $request -> password,
        ]);
        return redirect()->route('users.show', $id);
    }
    public function destroy($id){
         
        User::destroy($id);
        return redirect()->route('users.index');
    }
}