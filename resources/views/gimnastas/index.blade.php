@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Gimnastas</h1>
    <a href="{{ route('gimnastas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Gimnasta</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Apellidos</th>
                <th class="px-4 py-2">Modalidad</th>
                <th class="px-4 py-2">Nivel</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gimnastas as $gimnasta)
            <tr class="bg-white border-b">
                <td class="px-4 py-2">{{ $gimnasta->nombre }}</td>
                <td class="px-4 py-2">{{ $gimnasta->apellidos }}</td>
                <td class="px-4 py-2">{{ $gimnasta->modalidad }}</td>
                <td class="px-4 py-2">{{ $gimnasta->nivel }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('gimnastas.edit', $gimnasta->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                    <form action="{{ route('gimnastas.destroy', $gimnasta->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection