@extends('layouts.app')
@section('extra-margin-top', 'extra-margin-top')

@section('content')
<style>
    .table-header th {
    text-align: left;
    }
</style>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Gimnastas</h1>
    <div class="mb-8 text-right">
        <a href="{{ route('gimnastas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> + Agregar Gimnasta</a>
    </div>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-200 table-header">
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Modalidad</th>
                <th class="px-4 py-2">Nivel</th>
                <th class="px-4 py-2">Ciudad</th>
                <th class="px-4 py-2">Telefono</th>
                <th class="px-4 py-2">Club</th>
                <th class="px-4 py-2">Editar / Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gimnastas as $gimnasta)
            <tr class="bg-white border-b">
                <td class="px-4 py-2">{{ $gimnasta->nombre . ' ' . $gimnasta->apellidos }}</td>
                <td class="px-4 py-2">{{ $gimnasta->modalidad }}</td>
                <td class="px-4 py-2">{{ $gimnasta->nivel }}</td>
                <td class="px-4 py-2">{{ $gimnasta->ciudad }}</td>
                <td class="px-4 py-2">{{ $gimnasta->telefono }}</td>
                <td class="px-4 py-2">{{ $gimnasta->club->nombre_club }}</td>
                <td class="px-4 py-2 text-center">
                    <div class="flex space-x-8">
                        <a href="{{ route('gimnastas.edit', $gimnasta->id) }}" class="text-yellow-500 hover:text-yellow-700" title="Editar">
                            <i class="fas fa-pencil-alt fa-lg"></i>
                        </a>
                        <form action="{{ route('gimnastas.destroy', $gimnasta->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro que quieres eliminar esta gimnasta?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700" title="Eliminar">
                                <i class="fas fa-trash fa-lg"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection