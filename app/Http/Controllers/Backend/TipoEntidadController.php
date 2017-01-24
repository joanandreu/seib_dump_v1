<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoEntidadRequest;
use App\Http\Requests\Backend\UpdateTipoEntidadRequest;
use App\Repositories\Backend\TipoEntidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoEntidadController extends AppBaseController
{
    /** @var  TipoEntidadRepository */
    private $tipoEntidadRepository;

    public function __construct(TipoEntidadRepository $tipoEntidadRepo)
    {
        $this->tipoEntidadRepository = $tipoEntidadRepo;
    }

    /**
     * Display a listing of the TipoEntidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoEntidadRepository->pushCriteria(new RequestCriteria($request));
        $tipoEntidads = $this->tipoEntidadRepository->all();

        return view('backend.tipo_entidads.index')
            ->with('tipoEntidads', $tipoEntidads);
    }

    /**
     * Show the form for creating a new TipoEntidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tipo_entidads.create');
    }

    /**
     * Store a newly created TipoEntidad in storage.
     *
     * @param CreateTipoEntidadRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoEntidadRequest $request)
    {
        $input = $request->all();

        $tipoEntidad = $this->tipoEntidadRepository->create($input);

        Flash::success('Tipo Entidad saved successfully.');

        return redirect(route('backend.tipoEntidads.index'));
    }

    /**
     * Display the specified TipoEntidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoEntidad = $this->tipoEntidadRepository->findWithoutFail($id);

        if (empty($tipoEntidad)) {
            Flash::error('Tipo Entidad not found');

            return redirect(route('backend.tipoEntidads.index'));
        }

        return view('backend.tipo_entidads.show')->with('tipoEntidad', $tipoEntidad);
    }

    /**
     * Show the form for editing the specified TipoEntidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoEntidad = $this->tipoEntidadRepository->findWithoutFail($id);

        if (empty($tipoEntidad)) {
            Flash::error('Tipo Entidad not found');

            return redirect(route('backend.tipoEntidads.index'));
        }

        return view('backend.tipo_entidads.edit')->with('tipoEntidad', $tipoEntidad);
    }

    /**
     * Update the specified TipoEntidad in storage.
     *
     * @param  int              $id
     * @param UpdateTipoEntidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoEntidadRequest $request)
    {
        $tipoEntidad = $this->tipoEntidadRepository->findWithoutFail($id);

        if (empty($tipoEntidad)) {
            Flash::error('Tipo Entidad not found');

            return redirect(route('backend.tipoEntidads.index'));
        }

        $tipoEntidad = $this->tipoEntidadRepository->update($request->all(), $id);

        Flash::success('Tipo Entidad updated successfully.');

        return redirect(route('backend.tipoEntidads.index'));
    }

    /**
     * Remove the specified TipoEntidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoEntidad = $this->tipoEntidadRepository->findWithoutFail($id);

        if (empty($tipoEntidad)) {
            Flash::error('Tipo Entidad not found');

            return redirect(route('backend.tipoEntidads.index'));
        }

        $this->tipoEntidadRepository->delete($id);

        Flash::success('Tipo Entidad deleted successfully.');

        return redirect(route('backend.tipoEntidads.index'));
    }
}
