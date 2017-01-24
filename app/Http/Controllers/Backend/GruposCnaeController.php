<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateGruposCnaeRequest;
use App\Http\Requests\Backend\UpdateGruposCnaeRequest;
use App\Repositories\Backend\GruposCnaeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GruposCnaeController extends AppBaseController
{
    /** @var  GruposCnaeRepository */
    private $gruposCnaeRepository;

    public function __construct(GruposCnaeRepository $gruposCnaeRepo)
    {
        $this->gruposCnaeRepository = $gruposCnaeRepo;
    }

    /**
     * Display a listing of the GruposCnae.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->gruposCnaeRepository->pushCriteria(new RequestCriteria($request));
        $gruposCnaes = $this->gruposCnaeRepository->all();

        return view('backend.grupos_cnaes.index')
            ->with('gruposCnaes', $gruposCnaes);
    }

    /**
     * Show the form for creating a new GruposCnae.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.grupos_cnaes.create');
    }

    /**
     * Store a newly created GruposCnae in storage.
     *
     * @param CreateGruposCnaeRequest $request
     *
     * @return Response
     */
    public function store(CreateGruposCnaeRequest $request)
    {
        $input = $request->all();

        $gruposCnae = $this->gruposCnaeRepository->create($input);

        Flash::success('Grupos Cnae saved successfully.');

        return redirect(route('backend.gruposCnaes.index'));
    }

    /**
     * Display the specified GruposCnae.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gruposCnae = $this->gruposCnaeRepository->findWithoutFail($id);

        if (empty($gruposCnae)) {
            Flash::error('Grupos Cnae not found');

            return redirect(route('backend.gruposCnaes.index'));
        }

        return view('backend.grupos_cnaes.show')->with('gruposCnae', $gruposCnae);
    }

    /**
     * Show the form for editing the specified GruposCnae.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gruposCnae = $this->gruposCnaeRepository->findWithoutFail($id);

        if (empty($gruposCnae)) {
            Flash::error('Grupos Cnae not found');

            return redirect(route('backend.gruposCnaes.index'));
        }

        return view('backend.grupos_cnaes.edit')->with('gruposCnae', $gruposCnae);
    }

    /**
     * Update the specified GruposCnae in storage.
     *
     * @param  int              $id
     * @param UpdateGruposCnaeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGruposCnaeRequest $request)
    {
        $gruposCnae = $this->gruposCnaeRepository->findWithoutFail($id);

        if (empty($gruposCnae)) {
            Flash::error('Grupos Cnae not found');

            return redirect(route('backend.gruposCnaes.index'));
        }

        $gruposCnae = $this->gruposCnaeRepository->update($request->all(), $id);

        Flash::success('Grupos Cnae updated successfully.');

        return redirect(route('backend.gruposCnaes.index'));
    }

    /**
     * Remove the specified GruposCnae from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gruposCnae = $this->gruposCnaeRepository->findWithoutFail($id);

        if (empty($gruposCnae)) {
            Flash::error('Grupos Cnae not found');

            return redirect(route('backend.gruposCnaes.index'));
        }

        $this->gruposCnaeRepository->delete($id);

        Flash::success('Grupos Cnae deleted successfully.');

        return redirect(route('backend.gruposCnaes.index'));
    }
}
