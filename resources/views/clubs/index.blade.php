@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Clubs</h1>
    <a href="{{ route('clubs.create') }}" class="btn btn-primary">Agregar Club</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre del Club</th>
                <th>Presidente</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
            <tr>
                <td>{{ $club->nombre_club }}</td>
                <td>{{ $club->nombre_presidente }}</td>
                <td>{{ $club->ciudad }}</td>
                <td>
                    <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection