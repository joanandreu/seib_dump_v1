<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateHorarioPersonaRequest;
use App\Http\Requests\Backend\UpdateHorarioPersonaRequest;
use App\Repositories\Backend\HorarioPersonaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HorarioPersonaController extends AppBaseController
{
    /** @var  HorarioPersonaRepository */
    private $horarioPersonaRepository;

    public function __construct(HorarioPersonaRepository $horarioPersonaRepo)
    {
        $this->horarioPersonaRepository = $horarioPersonaRepo;
    }

    /**
     * Display a listing of the HorarioPersona.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->horarioPersonaRepository->pushCriteria(new RequestCriteria($request));
        $horarioPersonas = $this->horarioPersonaRepository->all();

        return view('backend.horario_personas.index')
            ->with('horarioPersonas', $horarioPersonas);
    }

    /**
     * Show the form for creating a new HorarioPersona.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.horario_personas.create');
    }

    /**
     * Store a newly created HorarioPersona in storage.
     *
     * @param CreateHorarioPersonaRequest $request
     *
     * @return Response
     */
    public function store(CreateHorarioPersonaRequest $request)
    {
        $input = $request->all();

        $horarioPersona = $this->horarioPersonaRepository->create($input);

        Flash::success('Horario Persona saved successfully.');

        return redirect(route('backend.horarioPersonas.index'));
    }

    /**
     * Display the specified HorarioPersona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $horarioPersona = $this->horarioPersonaRepository->findWithoutFail($id);

        if (empty($horarioPersona)) {
            Flash::error('Horario Persona not found');

            return redirect(route('backend.horarioPersonas.index'));
        }

        return view('backend.horario_personas.show')->with('horarioPersona', $horarioPersona);
    }

    /**
     * Show the form for editing the specified HorarioPersona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $horarioPersona = $this->horarioPersonaRepository->findWithoutFail($id);

        if (empty($horarioPersona)) {
            Flash::error('Horario Persona not found');

            return redirect(route('backend.horarioPersonas.index'));
        }

        return view('backend.horario_personas.edit')->with('horarioPersona', $horarioPersona);
    }

    /**
     * Update the specified HorarioPersona in storage.
     *
     * @param  int              $id
     * @param UpdateHorarioPersonaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHorarioPersonaRequest $request)
    {
        $horarioPersona = $this->horarioPersonaRepository->findWithoutFail($id);

        if (empty($horarioPersona)) {
            Flash::error('Horario Persona not found');

            return redirect(route('backend.horarioPersonas.index'));
        }

        $horarioPersona = $this->horarioPersonaRepository->update($request->all(), $id);

        Flash::success('Horario Persona updated successfully.');

        return redirect(route('backend.horarioPersonas.index'));
    }

    /**
     * Remove the specified HorarioPersona from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $horarioPersona = $this->horarioPersonaRepository->findWithoutFail($id);

        if (empty($horarioPersona)) {
            Flash::error('Horario Persona not found');

            return redirect(route('backend.horarioPersonas.index'));
        }

        $this->horarioPersonaRepository->delete($id);

        Flash::success('Horario Persona deleted successfully.');

        return redirect(route('backend.horarioPersonas.index'));
    }
}
