@extends('layouts.app')
@section('extra-margin-top', 'extra-margin-top')

@section('content')
<div class="flex justify-center items-center min-h-[calc(100vh-4rem)]">
    <div class="w-2/5 bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-4">Editar Competición</h1>
        <form action="{{ route('competiciones.update', $competicion->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="w-full border-2 p-2 rounded" value="{{ old('nombre', $competicion->nombre) }}">
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="w-full border-2 p-2 rounded" value="{{ old('fecha', $competicion->fecha) }}">
                @error('fecha')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="lugar" class="block text-gray-700">Lugar</label>
                <input type="text" name="lugar" id="lugar" class="w-full border-2 p-2 rounded" value="{{ old('lugar', $competicion->lugar) }}">
                @error('lugar')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="valor_inscripcion" class="block text-gray-700">Valor Inscripción</label>
                <input type="number" step="0.01" name="valor_inscripcion" id="valor_inscripcion" class="w-full border-2 p-2 rounded" value="{{ old('valor_inscripcion', $competicion->valor_inscripcion) }}">
                @error('valor_inscripcion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mr-2">Guardar</button>
                <a href="{{ route('competiciones.index') }}" class=" bg-red-400 hover:bg-red-600 text-white no-underline font-bold py-2 px-4 rounded w-full ml-2 text-center">Cancelar</a>
            </div>
        </form>
    </div> 
</div>
@endsection