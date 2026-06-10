<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function index(): View
    {

        return view('home');
    }

    public function dashboard()
    {
        $habits = auth()->user()->habits;

        return view('dashboard', compact('habits'));
    }
}
