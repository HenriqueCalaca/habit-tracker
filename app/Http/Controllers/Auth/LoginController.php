<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(request $request)
    {
       $credentiais = $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:6'
       ]);

       if(Auth::attempt($credentiais)){
           $request->session()->regenerate();

           return redirect()->intended('/');
       } else {
           return back()->withErrors([
               'email' => 'Credenciais inválidads',
           ]);
       }
    }
}
