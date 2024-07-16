<?php

namespace App\Http\Controllers;
use App\Models\Gimnasta;
use App\Models\Club;

use Illuminate\Http\Request;

class GimnastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gimnastas = Gimnasta::all();
        return view('gimnastas.index', compact('gimnastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clubs = Club::all();
        return view('gimnastas.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'modalidad' => 'required|max:255',
            'nivel' => 'required|max:255',
            'genero' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|max:20',
            'fecha_registro' => 'required|date',
            'club_id' => 'required|exists:clubs,id',
        ]);

        Gimnasta::create($validatedData);

        return redirect()->route('gimnastas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
