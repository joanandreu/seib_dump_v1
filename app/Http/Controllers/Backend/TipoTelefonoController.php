<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoTelefonoRequest;
use App\Http\Requests\Backend\UpdateTipoTelefonoRequest;
use App\Repositories\Backend\TipoTelefonoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoTelefonoController extends AppBaseController
{
    /** @var  TipoTelefonoRepository */
    private $tipoTelefonoRepository;

    public function __construct(TipoTelefonoRepository $tipoTelefonoRepo)
    {
        $this->tipoTelefonoRepository = $tipoTelefonoRepo;
    }

    /**
     * Display a listing of the TipoTelefono.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoTelefonoRepository->pushCriteria(new RequestCriteria($request));
        $tipoTelefonos = $this->tipoTelefonoRepository->all();

        return view('backend.tipo_telefonos.index')
            ->with('tipoTelefonos', $tipoTelefonos);
    }

    /**
     * Show the form for creating a new TipoTelefono.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tipo_telefonos.create');
    }

    /**
     * Store a newly created TipoTelefono in storage.
     *
     * @param CreateTipoTelefonoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoTelefonoRequest $request)
    {
        $input = $request->all();

        $tipoTelefono = $this->tipoTelefonoRepository->create($input);

        Flash::success('Tipo Telefono saved successfully.');

        return redirect(route('backend.tipoTelefonos.index'));
    }

    /**
     * Display the specified TipoTelefono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoTelefono = $this->tipoTelefonoRepository->findWithoutFail($id);

        if (empty($tipoTelefono)) {
            Flash::error('Tipo Telefono not found');

            return redirect(route('backend.tipoTelefonos.index'));
        }

        return view('backend.tipo_telefonos.show')->with('tipoTelefono', $tipoTelefono);
    }

    /**
     * Show the form for editing the specified TipoTelefono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoTelefono = $this->tipoTelefonoRepository->findWithoutFail($id);

        if (empty($tipoTelefono)) {
            Flash::error('Tipo Telefono not found');

            return redirect(route('backend.tipoTelefonos.index'));
        }

        return view('backend.tipo_telefonos.edit')->with('tipoTelefono', $tipoTelefono);
    }

    /**
     * Update the specified TipoTelefono in storage.
     *
     * @param  int              $id
     * @param UpdateTipoTelefonoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoTelefonoRequest $request)
    {
        $tipoTelefono = $this->tipoTelefonoRepository->findWithoutFail($id);

        if (empty($tipoTelefono)) {
            Flash::error('Tipo Telefono not found');

            return redirect(route('backend.tipoTelefonos.index'));
        }

        $tipoTelefono = $this->tipoTelefonoRepository->update($request->all(), $id);

        Flash::success('Tipo Telefono updated successfully.');

        return redirect(route('backend.tipoTelefonos.index'));
    }

    /**
     * Remove the specified TipoTelefono from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoTelefono = $this->tipoTelefonoRepository->findWithoutFail($id);

        if (empty($tipoTelefono)) {
            Flash::error('Tipo Telefono not found');

            return redirect(route('backend.tipoTelefonos.index'));
        }

        $this->tipoTelefonoRepository->delete($id);

        Flash::success('Tipo Telefono deleted successfully.');

        return redirect(route('backend.tipoTelefonos.index'));
    }
}
