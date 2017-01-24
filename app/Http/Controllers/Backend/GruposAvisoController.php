<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateGruposAvisoRequest;
use App\Http\Requests\Backend\UpdateGruposAvisoRequest;
use App\Repositories\Backend\GruposAvisoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GruposAvisoController extends AppBaseController
{
    /** @var  GruposAvisoRepository */
    private $gruposAvisoRepository;

    public function __construct(GruposAvisoRepository $gruposAvisoRepo)
    {
        $this->gruposAvisoRepository = $gruposAvisoRepo;
    }

    /**
     * Display a listing of the GruposAviso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->gruposAvisoRepository->pushCriteria(new RequestCriteria($request));
        $gruposAvisos = $this->gruposAvisoRepository->all();

        return view('backend.grupos_avisos.index')
            ->with('gruposAvisos', $gruposAvisos);
    }

    /**
     * Show the form for creating a new GruposAviso.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.grupos_avisos.create');
    }

    /**
     * Store a newly created GruposAviso in storage.
     *
     * @param CreateGruposAvisoRequest $request
     *
     * @return Response
     */
    public function store(CreateGruposAvisoRequest $request)
    {
        $input = $request->all();

        $gruposAviso = $this->gruposAvisoRepository->create($input);

        Flash::success('Grupos Aviso saved successfully.');

        return redirect(route('backend.gruposAvisos.index'));
    }

    /**
     * Display the specified GruposAviso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gruposAviso = $this->gruposAvisoRepository->findWithoutFail($id);

        if (empty($gruposAviso)) {
            Flash::error('Grupos Aviso not found');

            return redirect(route('backend.gruposAvisos.index'));
        }

        return view('backend.grupos_avisos.show')->with('gruposAviso', $gruposAviso);
    }

    /**
     * Show the form for editing the specified GruposAviso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gruposAviso = $this->gruposAvisoRepository->findWithoutFail($id);

        if (empty($gruposAviso)) {
            Flash::error('Grupos Aviso not found');

            return redirect(route('backend.gruposAvisos.index'));
        }

        return view('backend.grupos_avisos.edit')->with('gruposAviso', $gruposAviso);
    }

    /**
     * Update the specified GruposAviso in storage.
     *
     * @param  int              $id
     * @param UpdateGruposAvisoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGruposAvisoRequest $request)
    {
        $gruposAviso = $this->gruposAvisoRepository->findWithoutFail($id);

        if (empty($gruposAviso)) {
            Flash::error('Grupos Aviso not found');

            return redirect(route('backend.gruposAvisos.index'));
        }

        $gruposAviso = $this->gruposAvisoRepository->update($request->all(), $id);

        Flash::success('Grupos Aviso updated successfully.');

        return redirect(route('backend.gruposAvisos.index'));
    }

    /**
     * Remove the specified GruposAviso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gruposAviso = $this->gruposAvisoRepository->findWithoutFail($id);

        if (empty($gruposAviso)) {
            Flash::error('Grupos Aviso not found');

            return redirect(route('backend.gruposAvisos.index'));
        }

        $this->gruposAvisoRepository->delete($id);

        Flash::success('Grupos Aviso deleted successfully.');

        return redirect(route('backend.gruposAvisos.index'));
    }
}
