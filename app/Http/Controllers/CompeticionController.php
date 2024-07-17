<?php

namespace App\Http\Controllers;
use App\Models\Competicion;

use Illuminate\Http\Request;

class CompeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competiciones = Competicion::all();
        return view('competiciones.index', compact('competiciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('competiciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'fecha' => 'nullable|date',
            'lugar' => 'required|max:255',
            'valor_inscripcion' => 'nullable|numeric',
        ]);
        
        Competicion::create($validatedData);

        return redirect()->route('competiciones.index');

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
