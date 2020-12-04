<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditoria;
class ReporteController extends Controller
{
	public function reporte()
	{
    $reporte = Auditoria::all();
    return view('reportes', compact('reporte'));
}
}
