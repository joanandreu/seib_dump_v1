<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoRiesgoRequest;
use App\Http\Requests\Backend\UpdateTipoRiesgoRequest;
use App\Repositories\Backend\TipoRiesgoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoRiesgoController extends AppBaseController
{
    /** @var  TipoRiesgoRepository */
    private $tipoRiesgoRepository;

    public function __construct(TipoRiesgoRepository $tipoRiesgoRepo)
    {
        $this->tipoRiesgoRepository = $tipoRiesgoRepo;
    }

    /**
     * Display a listing of the TipoRiesgo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoRiesgoRepository->pushCriteria(new RequestCriteria($request));
        $tipoRiesgos = $this->tipoRiesgoRepository->all();

        return view('backend.tipo_riesgos.index')
            ->with('tipoRiesgos', $tipoRiesgos);
    }

    /**
     * Show the form for creating a new TipoRiesgo.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tipo_riesgos.create');
    }

    /**
     * Store a newly created TipoRiesgo in storage.
     *
     * @param CreateTipoRiesgoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoRiesgoRequest $request)
    {
        $input = $request->all();

        $tipoRiesgo = $this->tipoRiesgoRepository->create($input);

        Flash::success('Tipo Riesgo saved successfully.');

        return redirect(route('backend.tipoRiesgos.index'));
    }

    /**
     * Display the specified TipoRiesgo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoRiesgo = $this->tipoRiesgoRepository->findWithoutFail($id);

        if (empty($tipoRiesgo)) {
            Flash::error('Tipo Riesgo not found');

            return redirect(route('backend.tipoRiesgos.index'));
        }

        return view('backend.tipo_riesgos.show')->with('tipoRiesgo', $tipoRiesgo);
    }

    /**
     * Show the form for editing the specified TipoRiesgo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoRiesgo = $this->tipoRiesgoRepository->findWithoutFail($id);

        if (empty($tipoRiesgo)) {
            Flash::error('Tipo Riesgo not found');

            return redirect(route('backend.tipoRiesgos.index'));
        }

        return view('backend.tipo_riesgos.edit')->with('tipoRiesgo', $tipoRiesgo);
    }

    /**
     * Update the specified TipoRiesgo in storage.
     *
     * @param  int              $id
     * @param UpdateTipoRiesgoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoRiesgoRequest $request)
    {
        $tipoRiesgo = $this->tipoRiesgoRepository->findWithoutFail($id);

        if (empty($tipoRiesgo)) {
            Flash::error('Tipo Riesgo not found');

            return redirect(route('backend.tipoRiesgos.index'));
        }

        $tipoRiesgo = $this->tipoRiesgoRepository->update($request->all(), $id);

        Flash::success('Tipo Riesgo updated successfully.');

        return redirect(route('backend.tipoRiesgos.index'));
    }

    /**
     * Remove the specified TipoRiesgo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoRiesgo = $this->tipoRiesgoRepository->findWithoutFail($id);

        if (empty($tipoRiesgo)) {
            Flash::error('Tipo Riesgo not found');

            return redirect(route('backend.tipoRiesgos.index'));
        }

        $this->tipoRiesgoRepository->delete($id);

        Flash::success('Tipo Riesgo deleted successfully.');

        return redirect(route('backend.tipoRiesgos.index'));
    }
}
