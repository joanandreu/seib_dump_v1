<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateEntidadRequest;
use App\Http\Requests\Backend\UpdateEntidadRequest;
use App\Repositories\Backend\EntidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EntidadController extends AppBaseController
{
    /** @var  EntidadRepository */
    private $entidadRepository;

    public function __construct(EntidadRepository $entidadRepo)
    {
        $this->entidadRepository = $entidadRepo;
    }

    /**
     * Display a listing of the Entidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->entidadRepository->pushCriteria(new RequestCriteria($request));
        $entidads = $this->entidadRepository->all();

        return view('backend.entidads.index')
            ->with('entidads', $entidads);
    }

    /**
     * Show the form for creating a new Entidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.entidads.create');
    }

    /**
     * Store a newly created Entidad in storage.
     *
     * @param CreateEntidadRequest $request
     *
     * @return Response
     */
    public function store(CreateEntidadRequest $request)
    {
        $input = $request->all();

        $entidad = $this->entidadRepository->create($input);

        Flash::success('Entidad saved successfully.');

        return redirect(route('backend.entidads.index'));
    }

    /**
     * Display the specified Entidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entidad = $this->entidadRepository->findWithoutFail($id);

        if (empty($entidad)) {
            Flash::error('Entidad not found');

            return redirect(route('backend.entidads.index'));
        }

        return view('backend.entidads.show')->with('entidad', $entidad);
    }

    /**
     * Show the form for editing the specified Entidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entidad = $this->entidadRepository->findWithoutFail($id);

        if (empty($entidad)) {
            Flash::error('Entidad not found');

            return redirect(route('backend.entidads.index'));
        }

        return view('backend.entidads.edit')->with('entidad', $entidad);
    }

    /**
     * Update the specified Entidad in storage.
     *
     * @param  int              $id
     * @param UpdateEntidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntidadRequest $request)
    {
        $entidad = $this->entidadRepository->findWithoutFail($id);

        if (empty($entidad)) {
            Flash::error('Entidad not found');

            return redirect(route('backend.entidads.index'));
        }

        $entidad = $this->entidadRepository->update($request->all(), $id);

        Flash::success('Entidad updated successfully.');

        return redirect(route('backend.entidads.index'));
    }

    /**
     * Remove the specified Entidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entidad = $this->entidadRepository->findWithoutFail($id);

        if (empty($entidad)) {
            Flash::error('Entidad not found');

            return redirect(route('backend.entidads.index'));
        }

        $this->entidadRepository->delete($id);

        Flash::success('Entidad deleted successfully.');

        return redirect(route('backend.entidads.index'));
    }
}
