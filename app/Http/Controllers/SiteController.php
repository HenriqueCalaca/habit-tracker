<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Henrique';
        $habits = ['Correr', 'Jogar', 'Viajar'];

        return view('home',[
            'name' => $name,
            'habits' => $habits
        ] );
    }
}
