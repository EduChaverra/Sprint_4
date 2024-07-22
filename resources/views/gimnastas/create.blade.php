@extends('layouts.app')
@section('extra-margin-top', 'extra-margin-top')

@section('content')
<div class="flex justify-center items-center min-h-[calc(100vh-4rem)]">
    <div class="w-2/5 bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-4">Registrar Gimnasta</h1>
        <form action="{{ route('gimnastas.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="w-full border-2 p-2 rounded" value="{{ old('nombre') }}">
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="apellidos" class="block text-gray-700">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="w-full border-2 p-2 rounded" value="{{ old('apellidos') }}">
                @error('apellidos')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="modalidad" class="block text-gray-700">Modalidad</label>
                <select name="modalidad" id="modalidad" class="w-full border-2 p-2 rounded">
                    <option value="Artística" {{ old('modalidad') == 'Artística' ? 'selected' : '' }}>Artística</option>
                    <option value="Rítmica" {{ old('modalidad') == 'Rítmica' ? 'selected' : '' }}>Rítmica</option>
                    <option value="Trampolín" {{ old('modalidad') == 'Trampolín' ? 'selected' : '' }}>Trampolín</option>
                </select>
                @error('modalidad')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nivel" class="block text-gray-700">Nivel</label>
                <select name="nivel" id="nivel" class="w-full border-2 p-2 rounded">
                    <option value="Principiante" {{ old('nivel') == 'Principiante' ? 'selected' : '' }}>Principiante</option>
                    <option value="Intermedio" {{ old('nivel') == 'Intermedio' ? 'selected' : '' }}>Intermedio</option>
                    <option value="Avanzado" {{ old('nivel') == 'Avanzado' ? 'selected' : '' }}>Avanzado</option>
                </select>
                @error('nivel')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="genero" class="block text-gray-700">Género</label>
                <select name="genero" id="genero" class="w-full border-2 p-2 rounded">
                    <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('genero') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
                @error('genero')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="ciudad" class="block text-gray-700">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" class="w-full border-2 p-2 rounded" value="{{ old('ciudad') }}">
                @error('ciudad')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="direccion" class="block text-gray-700">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="w-full border-2 p-2 rounded" value="{{ old('direccion') }}">
                @error('direccion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="w-full border-2 p-2 rounded" value="{{ old('telefono') }}">
                @error('telefono')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="fecha_registro" class="block text-gray-700">Fecha de Registro</label>
                <input type="date" name="fecha_registro" id="fecha_registro" class="w-full border-2 p-2 rounded" value="{{ old('fecha_registro') }}">
                @error('fecha_registro')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="club_id" class="block text-gray-700">Club</label>
                <select name="club_id" id="club_id" class="w-full border-2 p-2 rounded">
                    @foreach($clubs as $club)
                        <option value="{{ $club->id }}" {{ old('club_id') == $club->id ? 'selected' : '' }}>{{ $club->nombre_club }}</option>
                    @endforeach
                </select>
                @error('club_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mr-2">Crear</button>
                <a href="{{ route('gimnastas.index') }}" class=" bg-red-400 hover:bg-red-600 text-white no-underline font-bold py-2 px-4 rounded w-full ml-2 text-center">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection