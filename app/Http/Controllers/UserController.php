<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function loginAuth(Request $request) { 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!',
        ]);


        $loginInfo = $request->only('email', 'password');

        if(Auth::attempt($loginInfo)) {
            return redirect()->route('tasks.index');
        } else {
            return redirect()->back()->withInput()->withErrors(['password' => 'Invalid Email or Password.']);
        }
    }

    public function register() {
        return view('register');
    }
    
    public function storeUser(Request $request) {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        //save the data in the db
        $user->save();
        
        return redirect()->route('login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
