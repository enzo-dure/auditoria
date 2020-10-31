<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaso_positivoRequest;
use App\Http\Requests\UpdateCaso_positivoRequest;
use App\Repositories\Caso_positivoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Caso_positivoController extends AppBaseController
{
    /** @var  Caso_positivoRepository */
    private $casoPositivoRepository;

    public function __construct(Caso_positivoRepository $casoPositivoRepo)
    {
        $this->casoPositivoRepository = $casoPositivoRepo;
    }

    /**
     * Display a listing of the Caso_positivo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $casoPositivos = $this->casoPositivoRepository->all();

        return view('caso_positivos.index')
            ->with('casoPositivos', $casoPositivos);
    }

    /**
     * Show the form for creating a new Caso_positivo.
     *
     * @return Response
     */
    public function create()
    {
        $ip=$this->getIp();
        return view('caso_positivos.create')->with('ip',$ip);
    }

    /**
     * Store a newly created Caso_positivo in storage.
     *
     * @param CreateCaso_positivoRequest $request
     *
     * @return Response
     */
    public function store(CreateCaso_positivoRequest $request)
    {
        $input = $request->all();

        $casoPositivo = $this->casoPositivoRepository->create($input);

        Flash::success('Caso Positivo saved successfully.');

        return redirect(route('casoPositivos.index'));
    }

    /**
     * Display the specified Caso_positivo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $casoPositivo = $this->casoPositivoRepository->find($id);

        if (empty($casoPositivo)) {
            Flash::error('Caso Positivo not found');

            return redirect(route('casoPositivos.index'));
        }

        return view('caso_positivos.show')->with('casoPositivo', $casoPositivo);
    }

    /**
     * Show the form for editing the specified Caso_positivo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)

        
    
    {
        
        $ip=$this->getIp();
        $casoPositivo = $this->casoPositivoRepository->find($id);

        if (empty($casoPositivo)) {
            Flash::error('Caso Positivo not found');

            return redirect(route('casoPositivos.index'));
        }

        return view('caso_positivos.edit',compact('casoPositivo','ip'));
     
    }


    /**
     * Update the specified Caso_positivo in storage.
     *
     * @param int $id
     * @param UpdateCaso_positivoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaso_positivoRequest $request)
    {
        $casoPositivo = $this->casoPositivoRepository->find($id);

        if (empty($casoPositivo)) {
            Flash::error('Caso Positivo not found');

            return redirect(route('casoPositivos.index'));
        }

        $casoPositivo = $this->casoPositivoRepository->update($request->all(), $id);

        Flash::success('Caso Positivo updated successfully.');

        return redirect(route('casoPositivos.index'));
    }

    /**
     * Remove the specified Caso_positivo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ip=$this->getIp();
        $casoPositivo = $this->casoPositivoRepository->find($id);

        if (empty($casoPositivo)) {
            Flash::error('Caso Positivo not found');

            return redirect(route('casoPositivos.index',compact('casoPositivo','ip')));
        }

        $this->casoPositivoRepository->delete($id);

        Flash::success('Caso Positivo deleted successfully.');

        return redirect(route('casoPositivos.index'));
    }
     public function getIp()
    {
          if (!empty($_SERVER['HTTP_CLIENT_IP']))   
          {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
          }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
          {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
          }
        //whether ip is from remote address
        else
          {
            $ip_address = $_SERVER['REMOTE_ADDR'];
          }
        return  $ip_address;
    }
}
