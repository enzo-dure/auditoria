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
        return view('pacients.create');
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
        $pacient = $this->pacientRepository->find($id);

        if (empty($pacient)) {
            Flash::error('Pacient not found');

            return redirect(route('pacients.index'));
        }

        return view('pacients.edit')->with('pacient', $pacient);
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
        $pacient = $this->pacientRepository->find($id);

        if (empty($pacient)) {
            Flash::error('Pacient not found');

            return redirect(route('pacients.index'));
        }

        $this->pacientRepository->delete($id);

        Flash::success('Pacient deleted successfully.');

        return redirect(route('pacients.index'));
    }
}
