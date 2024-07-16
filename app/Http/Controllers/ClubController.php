<?php

namespace App\Http\Controllers;
use App\Models\Club;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_club' => 'required|max:255',
            'nombre_presidente' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|max:20',
            'fecha_registro' => 'required|date',
        ]);

        Club::create($validatedData);

        return redirect()->route('clubs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $club = Club::findOrFail($id);
        return view('clubs.show', compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $club = Club::findOrFail($id);
        return view('clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nombre_club' => 'required|max:255',
            'nombre_presidente' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|max:20',
            'fecha_registro' => 'required|date',
        ]);

        Club::whereId($id)->update($validatedData);

        return redirect()->route('clubs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $club = Club::findOrFail($id);
        $club->delete();

        return redirect()->route('clubs.index');
    }
}
