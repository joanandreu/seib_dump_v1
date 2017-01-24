<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoMaterialRequest;
use App\Http\Requests\Backend\UpdateTipoMaterialRequest;
use App\Repositories\Backend\TipoMaterialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoMaterialController extends AppBaseController
{
    /** @var  TipoMaterialRepository */
    private $tipoMaterialRepository;

    public function __construct(TipoMaterialRepository $tipoMaterialRepo)
    {
        $this->tipoMaterialRepository = $tipoMaterialRepo;
    }

    /**
     * Display a listing of the TipoMaterial.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoMaterialRepository->pushCriteria(new RequestCriteria($request));
        $tipoMaterials = $this->tipoMaterialRepository->all();

        return view('backend.tipo_materials.index')
            ->with('tipoMaterials', $tipoMaterials);
    }

    /**
     * Show the form for creating a new TipoMaterial.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tipo_materials.create');
    }

    /**
     * Store a newly created TipoMaterial in storage.
     *
     * @param CreateTipoMaterialRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoMaterialRequest $request)
    {
        $input = $request->all();

        $tipoMaterial = $this->tipoMaterialRepository->create($input);

        Flash::success('Tipo Material saved successfully.');

        return redirect(route('backend.tipoMaterials.index'));
    }

    /**
     * Display the specified TipoMaterial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoMaterial = $this->tipoMaterialRepository->findWithoutFail($id);

        if (empty($tipoMaterial)) {
            Flash::error('Tipo Material not found');

            return redirect(route('backend.tipoMaterials.index'));
        }

        return view('backend.tipo_materials.show')->with('tipoMaterial', $tipoMaterial);
    }

    /**
     * Show the form for editing the specified TipoMaterial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoMaterial = $this->tipoMaterialRepository->findWithoutFail($id);

        if (empty($tipoMaterial)) {
            Flash::error('Tipo Material not found');

            return redirect(route('backend.tipoMaterials.index'));
        }

        return view('backend.tipo_materials.edit')->with('tipoMaterial', $tipoMaterial);
    }

    /**
     * Update the specified TipoMaterial in storage.
     *
     * @param  int              $id
     * @param UpdateTipoMaterialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoMaterialRequest $request)
    {
        $tipoMaterial = $this->tipoMaterialRepository->findWithoutFail($id);

        if (empty($tipoMaterial)) {
            Flash::error('Tipo Material not found');

            return redirect(route('backend.tipoMaterials.index'));
        }

        $tipoMaterial = $this->tipoMaterialRepository->update($request->all(), $id);

        Flash::success('Tipo Material updated successfully.');

        return redirect(route('backend.tipoMaterials.index'));
    }

    /**
     * Remove the specified TipoMaterial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoMaterial = $this->tipoMaterialRepository->findWithoutFail($id);

        if (empty($tipoMaterial)) {
            Flash::error('Tipo Material not found');

            return redirect(route('backend.tipoMaterials.index'));
        }

        $this->tipoMaterialRepository->delete($id);

        Flash::success('Tipo Material deleted successfully.');

        return redirect(route('backend.tipoMaterials.index'));
    }
}
