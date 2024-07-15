@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Competiciones</h1>
    <a href="{{ route('competiciones.create') }}" class="btn btn-primary">Agregar Competición</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Valor Inscripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($competiciones as $competicion)
            <tr>
                <td>{{ $competicion->nombre }}</td>
                <td>{{ $competicion->fecha }}</td>
                <td>{{ $competicion->lugar }}</td>
                <td>{{ $competicion->valor_inscripcion }}</td>
                <td>
                    <a href="{{ route('competiciones.edit', $competicion->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('competiciones.destroy', $competicion->id) }}" method="POST" class="d-inline">
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