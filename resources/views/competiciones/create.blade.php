@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Registrar Competición</h1>
    <form action="{{ route('competiciones.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="w-full border-2 p-2 rounded" value="{{ old('nombre') }}">
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha" class="block text-gray-700">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="w-full border-2 p-2 rounded" value="{{ old('fecha') }}">
            @error('fecha')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="lugar" class="block text-gray-700">Lugar</label>
            <input type="text" name="lugar" id="lugar" class="w-full border-2 p-2 rounded" value="{{ old('lugar') }}">
            @error('lugar')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="valor_inscripcion" class="block text-gray-700">Valor Inscripción</label>
            <input type="number" step="0.01" name="valor_inscripcion" id="valor_inscripcion" class="w-full border-2 p-2 rounded" value="{{ old('valor_inscripcion') }}">
            @error('valor_inscripcion')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Registrar</button>
    </form>
</div>
@endsection