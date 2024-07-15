<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competicion;

class ReporteController extends Controller
{
    public function competenciasPorFecha(Request $request)
    {
        $competiciones = Competicion::whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin])->get();
        return view('reportes.competencias_por_fecha', compact('competiciones'));
    }
}
