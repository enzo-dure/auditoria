<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuditoriaRequest;
use App\Http\Requests\UpdateAuditoriaRequest;
use App\Repositories\AuditoriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AuditoriaController extends AppBaseController
{
    /** @var  AuditoriaRepository */
    private $auditoriaRepository;

    public function __construct(AuditoriaRepository $auditoriaRepo)
    {
        $this->auditoriaRepository = $auditoriaRepo;
    }

    /**
     * Display a listing of the Auditoria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $auditorias = $this->auditoriaRepository->all();

        return view('auditorias.index')
            ->with('auditorias', $auditorias);
    }

    /**
     * Show the form for creating a new Auditoria.
     *
     * @return Response
     */
    public function create()
    {
        return view('auditorias.create');
    }

    /**
     * Store a newly created Auditoria in storage.
     *
     * @param CreateAuditoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateAuditoriaRequest $request)
    {
        $input = $request->all();

        $auditoria = $this->auditoriaRepository->create($input);

        Flash::success('Auditoria saved successfully.');

        return redirect(route('auditorias.index'));
    }

    /**
     * Display the specified Auditoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $auditoria = $this->auditoriaRepository->find($id);

        if (empty($auditoria)) {
            Flash::error('Auditoria not found');

            return redirect(route('auditorias.index'));
        }

        return view('auditorias.show')->with('auditoria', $auditoria);
    }

    /**
     * Show the form for editing the specified Auditoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $auditoria = $this->auditoriaRepository->find($id);

        if (empty($auditoria)) {
            Flash::error('Auditoria not found');

            return redirect(route('auditorias.index'));
        }

        return view('auditorias.edit')->with('auditoria', $auditoria);
    }

    /**
     * Update the specified Auditoria in storage.
     *
     * @param int $id
     * @param UpdateAuditoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAuditoriaRequest $request)
    {
        $auditoria = $this->auditoriaRepository->find($id);

        if (empty($auditoria)) {
            Flash::error('Auditoria not found');

            return redirect(route('auditorias.index'));
        }

        $auditoria = $this->auditoriaRepository->update($request->all(), $id);

        Flash::success('Auditoria updated successfully.');

        return redirect(route('auditorias.index'));
    }

    /**
     * Remove the specified Auditoria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $auditoria = $this->auditoriaRepository->find($id);

        if (empty($auditoria)) {
            Flash::error('Auditoria not found');

            return redirect(route('auditorias.index'));
        }

        $this->auditoriaRepository->delete($id);

        Flash::success('Auditoria deleted successfully.');

        return redirect(route('auditorias.index'));
    }
}
