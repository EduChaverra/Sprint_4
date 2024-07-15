@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reporte de Competencias por Fecha</h1>
    <form action="{{ route('reportes.competencias_por_fecha') }}" method="GET">
        <div class="form-group">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Generar Reporte</button>
    </form>
    @if(isset($competiciones))
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Lugar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($competiciones as $competicion)
            <tr>
                <td>{{ $competicion->nombre }}</td>
                <td>{{ $competicion->fecha }}</td>
                <td>{{ $competicion->lugar }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection