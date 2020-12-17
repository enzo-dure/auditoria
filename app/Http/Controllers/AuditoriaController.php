<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuditoriaRequest;
use App\Http\Requests\UpdateAuditoriaRequest;
use App\Repositories\AuditoriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use GuzzleHttp\Client;
class AuditoriaController extends AppBaseController

    {
    private $client;

    
    public function __construct(){
    //Ruta de api para consumir auditoria.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/auditorias']);
    
    
    }

    public function index ()
    {
        $repuesta=$this->client->get('auditorias');

        $auditorias = json_decode($repuesta->getBody()->getContents());
       
        return view('auditorias.index',compact('auditorias'));

    }
     public function show($id)
    {
        $respuesta = $this->client->get('auditorias/' .$id);

        $auditorias = $respuesta->getBody();

        return view('auditorias.show', ['auditorias' => json_decode($auditorias)]);
    }

}

