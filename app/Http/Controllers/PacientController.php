<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Repositories\PacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use GuzzleHttp\Client;
class PacientController extends AppBaseController
{
    private $client;

    private $ip;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/']);
    //Ruta para obtener los tipos de ip en pacientes.
    $this->ip = new Client (['base_uri'=>'http://127.0.0.1:6060/ip']);
    }

    public function index ()
    {
        $repuesta=$this->ip->get('pacientes');

        $pacients = json_decode($repuesta->getBody()->getContents());
       
        return view('pacients.index',compact('pacients'));

    }
    public function create(){

         $repuesta=$this->ip->get('ip');

          $ip = json_decode($repuesta->getBody()->getContents());
       
        return view('pacients.create',compact('ip'));
    }
    public function store (Request $request)
    {

        $this->client->post('pacientes',[

        'json' => $request->all()
        ]);

        Flash::success('Paciente guardado correctamente.');

         return redirect(route('pacients.index'));
    }

     public function show($id)
    {
        $respuesta = $this->client->get('pacients/' .$id);

        $pacientes = $respuesta->getBody();

        return view('pacients.show', ['pacients' => json_decode($pacientes)]);
    }

    public function edit ($id)
    {

        $repuesta=$this->client->get('pacientes/' .$id);

        $pacients = json_decode($repuesta->getBody()->getContents());

        $repuesta=$this->ip->get('ip');

        $ip = json_decode($repuesta->getBody()->getContents());

        return view('pacients.edit',compact('pacients','ip'));
    }

    public function update (Request $request, $id)
     {

        $this->client->put('pacientes/' . $id,[

        'json' => $request->all()
        ]);

        Flash::success('Paciente Actualizado guardado correctamente.');

        return redirect(route('pacients.index'));

    }
    public function destroy ($id){

       $this->client->delete('pacientes/' .$id);

       Flash::error('Paciente Eliminado correctamente.');

       return redirect(route('pacients.index'));
    }

   public function ip ()
    {
        $repuesta=$this->client->get('ip');

        $ip = json_decode($repuesta->getBody()->getContents());
       
        return view('pacients.index',compact('ip'));

    }
}