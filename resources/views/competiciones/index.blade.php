@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Competiciones</h1>
    <a href="{{ route('competiciones.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Competición</a>
    <table class="min-w-full bg-white mt-4 border">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Nombre</th>
                <th class="px-4 py-2 border">Fecha</th>
                <th class="px-4 py-2 border">Lugar</th>
                <th class="px-4 py-2 border">Valor Inscripción</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($competiciones as $competicion)
            <tr>
                <td class="px-4 py-2 border">{{ $competicion->nombre }}</td>
                <td class="px-4 py-2 border">{{ $competicion->fecha }}</td>
                <td class="px-4 py-2 border">{{ $competicion->lugar }}</td>
                <td class="px-4 py-2 border">{{ $competicion->valor_inscripcion }}</td>
                <td class="px-4 py-2 border">
                    <a href="{{ route('competiciones.edit', $competicion->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                    <form action="{{ route('competiciones.destroy', $competicion->id) }}" method="POST" class="inline">
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