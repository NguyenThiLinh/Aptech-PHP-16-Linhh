<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function SignUpForm(){
        return view('Sign-up');

    }
    public function signUpSuccessfully(Request $request){
        $name= $request -> ten;
        $email= $request -> email;
        DB::table ('users') ->insert(
            [
                'name'=> $name,
                'email'=> $email
            ]
            );

        $Users= DB::table('users')->get();
        return view('nguoidung',['bienNhieuNguoiDung'=> $Users]);

    }

    public function index(){
        $Users= User::all();
        return view('index',['users'=>$users]);
        }
        public function show($id){
            $user = User::find($id);
            return view('show', ['user' => $user]);
        }
        public function destroy($id)
        {
            $user = User::destroy($id);
            
            return redirect()->route('index');
        }
        public function create()
        {
            return view('create');
        }
        public function edit($id)
        {
            $users = User::find($id);
            return view('edit', ['users' => $users]);
        }
}