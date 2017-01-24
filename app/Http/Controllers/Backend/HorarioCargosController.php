<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateHorarioCargosRequest;
use App\Http\Requests\Backend\UpdateHorarioCargosRequest;
use App\Repositories\Backend\HorarioCargosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HorarioCargosController extends AppBaseController
{
    /** @var  HorarioCargosRepository */
    private $horarioCargosRepository;

    public function __construct(HorarioCargosRepository $horarioCargosRepo)
    {
        $this->horarioCargosRepository = $horarioCargosRepo;
    }

    /**
     * Display a listing of the HorarioCargos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->horarioCargosRepository->pushCriteria(new RequestCriteria($request));
        $horarioCargos = $this->horarioCargosRepository->all();

        return view('backend.horario_cargos.index')
            ->with('horarioCargos', $horarioCargos);
    }

    /**
     * Show the form for creating a new HorarioCargos.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.horario_cargos.create');
    }

    /**
     * Store a newly created HorarioCargos in storage.
     *
     * @param CreateHorarioCargosRequest $request
     *
     * @return Response
     */
    public function store(CreateHorarioCargosRequest $request)
    {
        $input = $request->all();

        $horarioCargos = $this->horarioCargosRepository->create($input);

        Flash::success('Horario Cargos saved successfully.');

        return redirect(route('backend.horarioCargos.index'));
    }

    /**
     * Display the specified HorarioCargos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $horarioCargos = $this->horarioCargosRepository->findWithoutFail($id);

        if (empty($horarioCargos)) {
            Flash::error('Horario Cargos not found');

            return redirect(route('backend.horarioCargos.index'));
        }

        return view('backend.horario_cargos.show')->with('horarioCargos', $horarioCargos);
    }

    /**
     * Show the form for editing the specified HorarioCargos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $horarioCargos = $this->horarioCargosRepository->findWithoutFail($id);

        if (empty($horarioCargos)) {
            Flash::error('Horario Cargos not found');

            return redirect(route('backend.horarioCargos.index'));
        }

        return view('backend.horario_cargos.edit')->with('horarioCargos', $horarioCargos);
    }

    /**
     * Update the specified HorarioCargos in storage.
     *
     * @param  int              $id
     * @param UpdateHorarioCargosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHorarioCargosRequest $request)
    {
        $horarioCargos = $this->horarioCargosRepository->findWithoutFail($id);

        if (empty($horarioCargos)) {
            Flash::error('Horario Cargos not found');

            return redirect(route('backend.horarioCargos.index'));
        }

        $horarioCargos = $this->horarioCargosRepository->update($request->all(), $id);

        Flash::success('Horario Cargos updated successfully.');

        return redirect(route('backend.horarioCargos.index'));
    }

    /**
     * Remove the specified HorarioCargos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $horarioCargos = $this->horarioCargosRepository->findWithoutFail($id);

        if (empty($horarioCargos)) {
            Flash::error('Horario Cargos not found');

            return redirect(route('backend.horarioCargos.index'));
        }

        $this->horarioCargosRepository->delete($id);

        Flash::success('Horario Cargos deleted successfully.');

        return redirect(route('backend.horarioCargos.index'));
    }
}
