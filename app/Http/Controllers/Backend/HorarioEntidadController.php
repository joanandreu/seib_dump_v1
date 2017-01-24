<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateHorarioEntidadRequest;
use App\Http\Requests\Backend\UpdateHorarioEntidadRequest;
use App\Repositories\Backend\HorarioEntidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HorarioEntidadController extends AppBaseController
{
    /** @var  HorarioEntidadRepository */
    private $horarioEntidadRepository;

    public function __construct(HorarioEntidadRepository $horarioEntidadRepo)
    {
        $this->horarioEntidadRepository = $horarioEntidadRepo;
    }

    /**
     * Display a listing of the HorarioEntidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->horarioEntidadRepository->pushCriteria(new RequestCriteria($request));
        $horarioEntidads = $this->horarioEntidadRepository->all();

        return view('backend.horario_entidads.index')
            ->with('horarioEntidads', $horarioEntidads);
    }

    /**
     * Show the form for creating a new HorarioEntidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.horario_entidads.create');
    }

    /**
     * Store a newly created HorarioEntidad in storage.
     *
     * @param CreateHorarioEntidadRequest $request
     *
     * @return Response
     */
    public function store(CreateHorarioEntidadRequest $request)
    {
        $input = $request->all();

        $horarioEntidad = $this->horarioEntidadRepository->create($input);

        Flash::success('Horario Entidad saved successfully.');

        return redirect(route('backend.horarioEntidads.index'));
    }

    /**
     * Display the specified HorarioEntidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $horarioEntidad = $this->horarioEntidadRepository->findWithoutFail($id);

        if (empty($horarioEntidad)) {
            Flash::error('Horario Entidad not found');

            return redirect(route('backend.horarioEntidads.index'));
        }

        return view('backend.horario_entidads.show')->with('horarioEntidad', $horarioEntidad);
    }

    /**
     * Show the form for editing the specified HorarioEntidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $horarioEntidad = $this->horarioEntidadRepository->findWithoutFail($id);

        if (empty($horarioEntidad)) {
            Flash::error('Horario Entidad not found');

            return redirect(route('backend.horarioEntidads.index'));
        }

        return view('backend.horario_entidads.edit')->with('horarioEntidad', $horarioEntidad);
    }

    /**
     * Update the specified HorarioEntidad in storage.
     *
     * @param  int              $id
     * @param UpdateHorarioEntidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHorarioEntidadRequest $request)
    {
        $horarioEntidad = $this->horarioEntidadRepository->findWithoutFail($id);

        if (empty($horarioEntidad)) {
            Flash::error('Horario Entidad not found');

            return redirect(route('backend.horarioEntidads.index'));
        }

        $horarioEntidad = $this->horarioEntidadRepository->update($request->all(), $id);

        Flash::success('Horario Entidad updated successfully.');

        return redirect(route('backend.horarioEntidads.index'));
    }

    /**
     * Remove the specified HorarioEntidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $horarioEntidad = $this->horarioEntidadRepository->findWithoutFail($id);

        if (empty($horarioEntidad)) {
            Flash::error('Horario Entidad not found');

            return redirect(route('backend.horarioEntidads.index'));
        }

        $this->horarioEntidadRepository->delete($id);

        Flash::success('Horario Entidad deleted successfully.');

        return redirect(route('backend.horarioEntidads.index'));
    }
}
