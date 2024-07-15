@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gimnastas</h1>
    <a href="{{ route('gimnastas.create') }}" class="btn btn-primary">Agregar Gimnasta</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Modalidad</th>
                <th>Nivel</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gimnastas as $gimnasta)
            <tr>
                <td>{{ $gimnasta->nombre }}</td>
                <td>{{ $gimnasta->apellidos }}</td>
                <td>{{ $gimnasta->modalidad }}</td>
                <td>{{ $gimnasta->nivel }}</td>
                <td>
                    <a href="{{ route('gimnastas.edit', $gimnasta->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('gimnastas.destroy', $gimnasta->id) }}" method="POST" class="d-inline">
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