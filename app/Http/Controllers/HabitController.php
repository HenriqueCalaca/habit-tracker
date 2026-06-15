<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HabitController extends Controller
{
    public function index()
    {
        $habits = auth()->user()->habits;

        return view('dashboard', compact('habits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        auth()->user()->habits()->create($validated);

        return redirect()
            ->route('habits.index')
            ->with('success', 'Habito cadastrado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HabitRequest $habit)
    {
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Habit $habit)
    {
        if($habit->user_id != auth()->user()->id){
            abort(403, 'Error');
        }

        $habit->update($request->all());

        return redirect()
            ->route('habits.index')
            ->with('success', 'Habito editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if($habit->user_id != auth()->user()->id){
            abort(403, 'Error');
        }

        $habit->delete();

        return redirect()
            ->route('habits.index')
            ->with('success', 'Habito deletado com sucesso!');
    }

}
