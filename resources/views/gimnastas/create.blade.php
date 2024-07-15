@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Gimnasta</h1>
    <form action="{{ route('gimnastas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control">
        </div>
        <div class="form-group">
            <label for="modalidad">Modalidad</label>
            <input type="text" name="modalidad" id="modalidad" class="form-control">
        </div>
        <div class="form-group">
            <label for="nivel">Nivel</label>
            <input type="text" name="nivel" id="nivel" class="form-control">
        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <select name="genero" id="genero" class="form-control">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_registro">Fecha de Registro</label>
            <input type="date" name="fecha_registro" id="fecha_registro" class="form-control">
        </div>
        <div class="form-group">
            <label for="club_id">Club</label>
            <select name="club_id" id="club_id" class="form-control">
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nombre_club }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection