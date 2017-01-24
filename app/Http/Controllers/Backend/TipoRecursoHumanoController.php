<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoRecursoHumanoRequest;
use App\Http\Requests\Backend\UpdateTipoRecursoHumanoRequest;
use App\Repositories\Backend\TipoRecursoHumanoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoRecursoHumanoController extends AppBaseController
{
    /** @var  TipoRecursoHumanoRepository */
    private $tipoRecursoHumanoRepository;

    public function __construct(TipoRecursoHumanoRepository $tipoRecursoHumanoRepo)
    {
        $this->tipoRecursoHumanoRepository = $tipoRecursoHumanoRepo;
    }

    /**
     * Display a listing of the TipoRecursoHumano.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoRecursoHumanoRepository->pushCriteria(new RequestCriteria($request));
        $tipoRecursoHumanos = $this->tipoRecursoHumanoRepository->all();

        return view('backend.tipo_recurso_humanos.index')
            ->with('tipoRecursoHumanos', $tipoRecursoHumanos);
    }

    /**
     * Show the form for creating a new TipoRecursoHumano.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tipo_recurso_humanos.create');
    }

    /**
     * Store a newly created TipoRecursoHumano in storage.
     *
     * @param CreateTipoRecursoHumanoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoRecursoHumanoRequest $request)
    {
        $input = $request->all();

        $tipoRecursoHumano = $this->tipoRecursoHumanoRepository->create($input);

        Flash::success('Tipo Recurso Humano saved successfully.');

        return redirect(route('backend.tipoRecursoHumanos.index'));
    }

    /**
     * Display the specified TipoRecursoHumano.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoRecursoHumano = $this->tipoRecursoHumanoRepository->findWithoutFail($id);

        if (empty($tipoRecursoHumano)) {
            Flash::error('Tipo Recurso Humano not found');

            return redirect(route('backend.tipoRecursoHumanos.index'));
        }

        return view('backend.tipo_recurso_humanos.show')->with('tipoRecursoHumano', $tipoRecursoHumano);
    }

    /**
     * Show the form for editing the specified TipoRecursoHumano.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoRecursoHumano = $this->tipoRecursoHumanoRepository->findWithoutFail($id);

        if (empty($tipoRecursoHumano)) {
            Flash::error('Tipo Recurso Humano not found');

            return redirect(route('backend.tipoRecursoHumanos.index'));
        }

        return view('backend.tipo_recurso_humanos.edit')->with('tipoRecursoHumano', $tipoRecursoHumano);
    }

    /**
     * Update the specified TipoRecursoHumano in storage.
     *
     * @param  int              $id
     * @param UpdateTipoRecursoHumanoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoRecursoHumanoRequest $request)
    {
        $tipoRecursoHumano = $this->tipoRecursoHumanoRepository->findWithoutFail($id);

        if (empty($tipoRecursoHumano)) {
            Flash::error('Tipo Recurso Humano not found');

            return redirect(route('backend.tipoRecursoHumanos.index'));
        }

        $tipoRecursoHumano = $this->tipoRecursoHumanoRepository->update($request->all(), $id);

        Flash::success('Tipo Recurso Humano updated successfully.');

        return redirect(route('backend.tipoRecursoHumanos.index'));
    }

    /**
     * Remove the specified TipoRecursoHumano from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoRecursoHumano = $this->tipoRecursoHumanoRepository->findWithoutFail($id);

        if (empty($tipoRecursoHumano)) {
            Flash::error('Tipo Recurso Humano not found');

            return redirect(route('backend.tipoRecursoHumanos.index'));
        }

        $this->tipoRecursoHumanoRepository->delete($id);

        Flash::success('Tipo Recurso Humano deleted successfully.');

        return redirect(route('backend.tipoRecursoHumanos.index'));
    }
}
