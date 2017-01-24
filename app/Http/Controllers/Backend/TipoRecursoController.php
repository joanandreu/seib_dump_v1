<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoRecursoRequest;
use App\Http\Requests\Backend\UpdateTipoRecursoRequest;
use App\Repositories\Backend\TipoRecursoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoRecursoController extends AppBaseController
{
    /** @var  TipoRecursoRepository */
    private $tipoRecursoRepository;

    public function __construct(TipoRecursoRepository $tipoRecursoRepo)
    {
        $this->tipoRecursoRepository = $tipoRecursoRepo;
    }

    /**
     * Display a listing of the TipoRecurso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoRecursoRepository->pushCriteria(new RequestCriteria($request));
        $tipoRecursos = $this->tipoRecursoRepository->all();

        return view('backend.tipo_recursos.index')
            ->with('tipoRecursos', $tipoRecursos);
    }

    /**
     * Show the form for creating a new TipoRecurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tipo_recursos.create');
    }

    /**
     * Store a newly created TipoRecurso in storage.
     *
     * @param CreateTipoRecursoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoRecursoRequest $request)
    {
        $input = $request->all();

        $tipoRecurso = $this->tipoRecursoRepository->create($input);

        Flash::success('Tipo Recurso saved successfully.');

        return redirect(route('backend.tipoRecursos.index'));
    }

    /**
     * Display the specified TipoRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoRecurso = $this->tipoRecursoRepository->findWithoutFail($id);

        if (empty($tipoRecurso)) {
            Flash::error('Tipo Recurso not found');

            return redirect(route('backend.tipoRecursos.index'));
        }

        return view('backend.tipo_recursos.show')->with('tipoRecurso', $tipoRecurso);
    }

    /**
     * Show the form for editing the specified TipoRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoRecurso = $this->tipoRecursoRepository->findWithoutFail($id);

        if (empty($tipoRecurso)) {
            Flash::error('Tipo Recurso not found');

            return redirect(route('backend.tipoRecursos.index'));
        }

        return view('backend.tipo_recursos.edit')->with('tipoRecurso', $tipoRecurso);
    }

    /**
     * Update the specified TipoRecurso in storage.
     *
     * @param  int              $id
     * @param UpdateTipoRecursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoRecursoRequest $request)
    {
        $tipoRecurso = $this->tipoRecursoRepository->findWithoutFail($id);

        if (empty($tipoRecurso)) {
            Flash::error('Tipo Recurso not found');

            return redirect(route('backend.tipoRecursos.index'));
        }

        $tipoRecurso = $this->tipoRecursoRepository->update($request->all(), $id);

        Flash::success('Tipo Recurso updated successfully.');

        return redirect(route('backend.tipoRecursos.index'));
    }

    /**
     * Remove the specified TipoRecurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoRecurso = $this->tipoRecursoRepository->findWithoutFail($id);

        if (empty($tipoRecurso)) {
            Flash::error('Tipo Recurso not found');

            return redirect(route('backend.tipoRecursos.index'));
        }

        $this->tipoRecursoRepository->delete($id);

        Flash::success('Tipo Recurso deleted successfully.');

        return redirect(route('backend.tipoRecursos.index'));
    }
}
