<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateMaterialRequest;
use App\Http\Requests\Backend\UpdateMaterialRequest;
use App\Repositories\Backend\MaterialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MaterialController extends AppBaseController
{
    /** @var  MaterialRepository */
    private $materialRepository;

    public function __construct(MaterialRepository $materialRepo)
    {
        $this->materialRepository = $materialRepo;
    }

    /**
     * Display a listing of the Material.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->materialRepository->pushCriteria(new RequestCriteria($request));
        $materials = $this->materialRepository->all();

        return view('backend.materials.index')
            ->with('materials', $materials);
    }

    /**
     * Show the form for creating a new Material.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.materials.create');
    }

    /**
     * Store a newly created Material in storage.
     *
     * @param CreateMaterialRequest $request
     *
     * @return Response
     */
    public function store(CreateMaterialRequest $request)
    {
        $input = $request->all();

        $material = $this->materialRepository->create($input);

        Flash::success('Material saved successfully.');

        return redirect(route('backend.materials.index'));
    }

    /**
     * Display the specified Material.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $material = $this->materialRepository->findWithoutFail($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('backend.materials.index'));
        }

        return view('backend.materials.show')->with('material', $material);
    }

    /**
     * Show the form for editing the specified Material.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $material = $this->materialRepository->findWithoutFail($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('backend.materials.index'));
        }

        return view('backend.materials.edit')->with('material', $material);
    }

    /**
     * Update the specified Material in storage.
     *
     * @param  int              $id
     * @param UpdateMaterialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaterialRequest $request)
    {
        $material = $this->materialRepository->findWithoutFail($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('backend.materials.index'));
        }

        $material = $this->materialRepository->update($request->all(), $id);

        Flash::success('Material updated successfully.');

        return redirect(route('backend.materials.index'));
    }

    /**
     * Remove the specified Material from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $material = $this->materialRepository->findWithoutFail($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('backend.materials.index'));
        }

        $this->materialRepository->delete($id);

        Flash::success('Material deleted successfully.');

        return redirect(route('backend.materials.index'));
    }
}
