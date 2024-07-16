@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Clubs</h1>
    <a href="{{ route('clubs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Club</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Nombre del Club</th>
                <th class="px-4 py-2">Presidente</th>
                <th class="px-4 py-2">Ciudad</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
            <tr class="bg-white border-b">
                <td class="px-4 py-2">{{ $club->nombre_club }}</td>
                <td class="px-4 py-2">{{ $club->nombre_presidente }}</td>
                <td class="px-4 py-2">{{ $club->ciudad }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('clubs.edit', $club->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                    <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="inline-block">
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