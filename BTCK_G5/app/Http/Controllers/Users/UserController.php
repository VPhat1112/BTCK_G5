<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() {

        return view('fe.login');
    }

    public function register() {

        return view('fe.register');
    }

    public function postRegister(Request $request) {

        //validate
        $request->merge(['password'=>Hash::make($request->password)]);
        
        try {
            User::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
        }

        return redirect()->route('login-user');
    }

    public function postLogin(Request $request) {
        
        if(Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password
            ])) {
            return redirect()->route('index');
        } 
        
        return redirect()->back()->with('error', 'Thong tin dang nhap sai!');

        
    }


    public function logout() {
        
        Auth::logout();
        // return redirect()->back();
        return redirect()->route('login-user');

        
    }
}
