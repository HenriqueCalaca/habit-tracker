<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
       $credentiais = $request->only('email', 'password');

       if(Auth::attempt($credentiais)){
           $request->session()->regenerate();

           return redirect()->intended(route('habits.index'));
       }

       return back()->withErrors([
           'email' => 'Credenciais inválidads',
       ]);

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('site.index'));
    }
}
