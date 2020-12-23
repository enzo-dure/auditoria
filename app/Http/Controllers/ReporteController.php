<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditoria;
use GuzzleHttp\Client;
class ReporteController extends Controller
{
	 private $reporte;

  

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->reporte = new Client (['base_uri'=>'http://127.0.0.1:6060/reporte']);
    
    }

    public function reporte ()
    {
        $repuesta=$this->reporte->get('reporte');

        $reporte = json_decode($repuesta->getBody()->getContents());
       
        return view('reportes',compact('reporte'));

    }
}
