@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Participaciones</h1>
    <a href="{{ route('participaciones.create') }}" class="btn btn-primary">Agregar Participación</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Gimnasta</th>
                <th>Competición</th>
                <th>Resultado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participaciones as $participacion)
            <tr>
                <td>{{ $participacion->gimnasta->nombre }}</td>
                <td>{{ $participacion->competicion->nombre }}</td>
                <td>{{ $participacion->resultado }}</td>
                <td>
                    <a href="{{ route('participaciones.edit', $participacion->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('participaciones.destroy', $participacion->id) }}" method="POST" class="d-inline">
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