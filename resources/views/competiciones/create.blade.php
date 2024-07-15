@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Competición</h1>
    <form action="{{ route('competiciones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="lugar">Lugar</label>
            <input type="text" name="lugar" id="lugar" class="form-control">
        </div>
        <div class="form-group">
            <label for="valor_inscripcion">Valor Inscripción</label>
            <input type="number" step="0.01" name="valor_inscripcion" id="valor_inscripcion" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection