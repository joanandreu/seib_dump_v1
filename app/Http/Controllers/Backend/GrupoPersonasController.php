<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateGrupoPersonasRequest;
use App\Http\Requests\Backend\UpdateGrupoPersonasRequest;
use App\Repositories\Backend\GrupoPersonasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GrupoPersonasController extends AppBaseController
{
    /** @var  GrupoPersonasRepository */
    private $grupoPersonasRepository;

    public function __construct(GrupoPersonasRepository $grupoPersonasRepo)
    {
        $this->grupoPersonasRepository = $grupoPersonasRepo;
    }

    /**
     * Display a listing of the GrupoPersonas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->grupoPersonasRepository->pushCriteria(new RequestCriteria($request));
        $grupoPersonas = $this->grupoPersonasRepository->all();

        return view('backend.grupo_personas.index')
            ->with('grupoPersonas', $grupoPersonas);
    }

    /**
     * Show the form for creating a new GrupoPersonas.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.grupo_personas.create');
    }

    /**
     * Store a newly created GrupoPersonas in storage.
     *
     * @param CreateGrupoPersonasRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoPersonasRequest $request)
    {
        $input = $request->all();

        $grupoPersonas = $this->grupoPersonasRepository->create($input);

        Flash::success('Grupo Personas saved successfully.');

        return redirect(route('backend.grupoPersonas.index'));
    }

    /**
     * Display the specified GrupoPersonas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoPersonas = $this->grupoPersonasRepository->findWithoutFail($id);

        if (empty($grupoPersonas)) {
            Flash::error('Grupo Personas not found');

            return redirect(route('backend.grupoPersonas.index'));
        }

        return view('backend.grupo_personas.show')->with('grupoPersonas', $grupoPersonas);
    }

    /**
     * Show the form for editing the specified GrupoPersonas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoPersonas = $this->grupoPersonasRepository->findWithoutFail($id);

        if (empty($grupoPersonas)) {
            Flash::error('Grupo Personas not found');

            return redirect(route('backend.grupoPersonas.index'));
        }

        return view('backend.grupo_personas.edit')->with('grupoPersonas', $grupoPersonas);
    }

    /**
     * Update the specified GrupoPersonas in storage.
     *
     * @param  int              $id
     * @param UpdateGrupoPersonasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoPersonasRequest $request)
    {
        $grupoPersonas = $this->grupoPersonasRepository->findWithoutFail($id);

        if (empty($grupoPersonas)) {
            Flash::error('Grupo Personas not found');

            return redirect(route('backend.grupoPersonas.index'));
        }

        $grupoPersonas = $this->grupoPersonasRepository->update($request->all(), $id);

        Flash::success('Grupo Personas updated successfully.');

        return redirect(route('backend.grupoPersonas.index'));
    }

    /**
     * Remove the specified GrupoPersonas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoPersonas = $this->grupoPersonasRepository->findWithoutFail($id);

        if (empty($grupoPersonas)) {
            Flash::error('Grupo Personas not found');

            return redirect(route('backend.grupoPersonas.index'));
        }

        $this->grupoPersonasRepository->delete($id);

        Flash::success('Grupo Personas deleted successfully.');

        return redirect(route('backend.grupoPersonas.index'));
    }
}
