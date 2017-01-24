<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoEnvioRequest;
use App\Http\Requests\Backend\UpdateTipoEnvioRequest;
use App\Repositories\Backend\TipoEnvioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoEnvioController extends AppBaseController
{
    /** @var  TipoEnvioRepository */
    private $tipoEnvioRepository;

    public function __construct(TipoEnvioRepository $tipoEnvioRepo)
    {
        $this->tipoEnvioRepository = $tipoEnvioRepo;
    }

    /**
     * Display a listing of the TipoEnvio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoEnvioRepository->pushCriteria(new RequestCriteria($request));
        $tipoEnvios = $this->tipoEnvioRepository->all();

        return view('backend.tipo_envios.index')
            ->with('tipoEnvios', $tipoEnvios);
    }

    /**
     * Show the form for creating a new TipoEnvio.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tipo_envios.create');
    }

    /**
     * Store a newly created TipoEnvio in storage.
     *
     * @param CreateTipoEnvioRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoEnvioRequest $request)
    {
        $input = $request->all();

        $tipoEnvio = $this->tipoEnvioRepository->create($input);

        Flash::success('Tipo Envio saved successfully.');

        return redirect(route('backend.tipoEnvios.index'));
    }

    /**
     * Display the specified TipoEnvio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoEnvio = $this->tipoEnvioRepository->findWithoutFail($id);

        if (empty($tipoEnvio)) {
            Flash::error('Tipo Envio not found');

            return redirect(route('backend.tipoEnvios.index'));
        }

        return view('backend.tipo_envios.show')->with('tipoEnvio', $tipoEnvio);
    }

    /**
     * Show the form for editing the specified TipoEnvio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoEnvio = $this->tipoEnvioRepository->findWithoutFail($id);

        if (empty($tipoEnvio)) {
            Flash::error('Tipo Envio not found');

            return redirect(route('backend.tipoEnvios.index'));
        }

        return view('backend.tipo_envios.edit')->with('tipoEnvio', $tipoEnvio);
    }

    /**
     * Update the specified TipoEnvio in storage.
     *
     * @param  int              $id
     * @param UpdateTipoEnvioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoEnvioRequest $request)
    {
        $tipoEnvio = $this->tipoEnvioRepository->findWithoutFail($id);

        if (empty($tipoEnvio)) {
            Flash::error('Tipo Envio not found');

            return redirect(route('backend.tipoEnvios.index'));
        }

        $tipoEnvio = $this->tipoEnvioRepository->update($request->all(), $id);

        Flash::success('Tipo Envio updated successfully.');

        return redirect(route('backend.tipoEnvios.index'));
    }

    /**
     * Remove the specified TipoEnvio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoEnvio = $this->tipoEnvioRepository->findWithoutFail($id);

        if (empty($tipoEnvio)) {
            Flash::error('Tipo Envio not found');

            return redirect(route('backend.tipoEnvios.index'));
        }

        $this->tipoEnvioRepository->delete($id);

        Flash::success('Tipo Envio deleted successfully.');

        return redirect(route('backend.tipoEnvios.index'));
    }
}
