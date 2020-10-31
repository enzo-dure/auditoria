<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePacientRequest;
use App\Http\Requests\UpdatePacientRequest;
use App\Repositories\PacientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PacientController extends AppBaseController
{
    /** @var  PacientRepository */
    private $pacientRepository;

    public function __construct(PacientRepository $pacientRepo)
    {
        $this->pacientRepository = $pacientRepo;
    }

    /**
     * Display a listing of the Pacient.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pacients = $this->pacientRepository->all();

        return view('pacients.index')
            ->with('pacients', $pacients);
    }

    /**
     * Show the form for creating a new Pacient.
     *
     * @return Response
     */
    public function create()
    {
        $ip=$this->getIp();
        return view('pacients.create')->with('ip',$ip);
    }

    /**
     * Store a newly created Pacient in storage.
     *
     * @param CreatePacientRequest $request
     *
     * @return Response
     */
    public function store(CreatePacientRequest $request)
    {
        $input = $request->all();

        $pacient = $this->pacientRepository->create($input);

        Flash::success('Pacient saved successfully.');

        return redirect(route('pacients.index'));
    }

    /**
     * Display the specified Pacient.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pacient = $this->pacientRepository->find($id);

        if (empty($pacient)) {
            Flash::error('Pacient not found');

            return redirect(route('pacients.index'));
        }

        return view('pacients.show')->with('pacient', $pacient);
    }

    /**
     * Show the form for editing the specified Pacient.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ip=$this->getIp();
        $pacient = $this->pacientRepository->find($id);

        if (empty($pacient)) {
            Flash::error('Pacient not found');

            return redirect(route('pacients.index'));
        }

        return view('pacients.edit',compact('pacient','ip'));
    }

    /**
     * Update the specified Pacient in storage.
     *
     * @param int $id
     * @param UpdatePacientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePacientRequest $request)
    {
        $pacient = $this->pacientRepository->find($id);

        if (empty($pacient)) {
            Flash::error('Pacient not found');

            return redirect(route('pacients.index'));
        }

        $pacient = $this->pacientRepository->update($request->all(), $id);

        Flash::success('Pacient updated successfully.');

        return redirect(route('pacients.index'));
    }

    /**
     * Remove the specified Pacient from storage.
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
        $pacient = $this->pacientRepository->find($id);

        if (empty($pacient)) {
            Flash::error('Pacient not found');

            return redirect(route('pacients.index',compact('pacient','ip')));
        }

        $this->pacientRepository->delete($id);

        Flash::success('Pacient deleted successfully.');

        return redirect(route('pacients.index'));
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
