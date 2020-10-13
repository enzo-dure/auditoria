<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Repositories\PacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PacienteController extends AppBaseController
{
    /** @var  PacienteRepository */
    private $pacienteRepository;

    public function __construct(PacienteRepository $pacienteRepo)
    {
        $this->pacienteRepository = $pacienteRepo;
    }

    /**
     * Display a listing of the Paciente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pacientes = $this->pacienteRepository->all();

        return view('pacientes.index')
            ->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new Paciente.
     *
     * @return Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created Paciente in storage.
     *
     * @param CreatePacienteRequest $request
     *
     * @return Response
     */
    public function store(CreatePacienteRequest $request)
    {
        $input = $request->all();

        $paciente = $this->pacienteRepository->create($input);

        Flash::success('Paciente saved successfully.');

        return redirect(route('pacientes.index'));
    }

    /**
     * Display the specified Paciente.
     *
     * @param int $id_persona
     *
     * @return Response
     */
    public function show($id_persona)
    {
        $paciente = $this->pacienteRepository->find($id_persona);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        return view('pacientes.show')->with('paciente', $paciente);
    }

    /**
     * Show the form for editing the specified Paciente.
     *
     * @param int $id_persona
     *
     * @return Response
     */
    public function edit($id_persona)
    {
        $paciente = $this->pacienteRepository->find($id_persona);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        return view('pacientes.edit')->with('paciente', $paciente);
    }

    /**
     * Update the specified Paciente in storage.
     *
     * @param int $id_persona
     * @param UpdatePacienteRequest $request
     *
     * @return Response
     */
    public function update($id_persona, UpdatePacienteRequest $request)
    {
        $paciente = $this->pacienteRepository->find($id_persona);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        $paciente = $this->pacienteRepository->update($request->all(), $id_persona);

        Flash::success('Paciente updated successfully.');

        return redirect(route('pacientes.index'));
    }

    /**
     * Remove the specified Paciente from storage.
     *
     * @param int $id_persona
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id_persona)
    {
        $paciente = $this->pacienteRepository->find($id_persona);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        $this->pacienteRepository->delete($id_persona);

        Flash::success('Paciente deleted successfully.');

        return redirect(route('pacientes.index'));
    }
}
