@extends('layouts.app')
@section('extra-margin-top', 'extra-margin-top')

@section('content')
<style>
    .table-header th {
        text-align: left;
    }
</style>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Competiciones</h1>
    <div class="mb-8 text-right">
        <a href="{{ route('competiciones.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> + Agregar Competición</a>
    </div>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-200 table-header">
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Fecha</th>
                <th class="px-4 py-2">Lugar</th>
                <th class="px-4 py-2">Valor Inscripción (€)</th>
                <th class="px-4 py-2">Editar / Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($competiciones as $competicion)
            <tr class="bg-white border-b">
                <td class="px-4 py-2">{{ $competicion->nombre }}</td>
                <td class="px-4 py-2">{{ $competicion->fecha }}</td>
                <td class="px-4 py-2">{{ $competicion->lugar }}</td>
                <td class="px-4 py-2">{{ $competicion->valor_inscripcion }}</td>
                <td class="px-4 py-2 text-center">
                    <div class="flex space-x-8">
                        <a href="{{ route('competiciones.edit', $competicion->id) }}" class="text-yellow-500 hover:text-yellow-700" title="Editar">
                            <i class="fas fa-pencil-alt fa-lg"></i>
                        </a>
                        <form action="{{ route('competiciones.destroy', $competicion->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro que quieres eliminar esta competición?');">
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