@extends('layouts.app')
@section('extra-margin-top', 'extra-margin-top')

@section('content')
<div class="flex justify-center items-center min-h-[calc(100vh-4rem)]">
    <div class="w-2/5 bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-4">Crear Nuevo Club</h1>
        <form action="{{ route('clubs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre_club" class="block text-gray-700">Nombre del Club:</label>
                <input type="text" name="nombre_club" id="nombre_club" class="w-full border-2 p-2 rounded" value="{{ old('nombre_club') }}">
                @error('nombre_club')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nombre_presidente" class="block text-gray-700">Nombre del Presidente:</label>
                <input type="text" name="nombre_presidente" id="nombre_presidente" class="w-full border-2 p-2 rounded" value="{{ old('nombre_presidente') }}">
                @error('nombre_presidente')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="ciudad" class="block text-gray-700">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" class="w-full border-2 p-2 rounded" value="{{ old('ciudad') }}">
                @error('ciudad')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="direccion" class="block text-gray-700">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="w-full border-2 p-2 rounded" value="{{ old('direccion') }}">
                @error('direccion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="w-full border-2 p-2 rounded" value="{{ old('telefono') }}">
                @error('telefono')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="fecha_registro" class="block text-gray-700">Fecha de Registro:</label>
                <input type="date" name="fecha_registro" id="fecha_registro" class="w-full border-2 p-2 rounded" value="{{ old('fecha_registro') }}">
                @error('fecha_registro')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear</button>
        </form>
    </div>
</div>
@endsection