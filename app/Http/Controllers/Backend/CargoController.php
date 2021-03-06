<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateCargoRequest;
use App\Http\Requests\Backend\UpdateCargoRequest;
use App\Repositories\Backend\CargoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CargoController extends AppBaseController
{
    /** @var  CargoRepository */
    private $cargoRepository;

    public function __construct(CargoRepository $cargoRepo)
    {
        $this->cargoRepository = $cargoRepo;
    }

    /**
     * Display a listing of the Cargo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cargoRepository->pushCriteria(new RequestCriteria($request));
        $cargos = $this->cargoRepository->all();

        return view('backend.cargos.index')
            ->with('cargos', $cargos);
    }

    /**
     * Show the form for creating a new Cargo.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cargos.create');
    }

    /**
     * Store a newly created Cargo in storage.
     *
     * @param CreateCargoRequest $request
     *
     * @return Response
     */
    public function store(CreateCargoRequest $request)
    {
        $input = $request->all();

        $cargo = $this->cargoRepository->create($input);

        Flash::success('Cargo saved successfully.');

        return redirect(route('backend.cargos.index'));
    }

    /**
     * Display the specified Cargo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cargo = $this->cargoRepository->findWithoutFail($id);

        if (empty($cargo)) {
            Flash::error('Cargo not found');

            return redirect(route('backend.cargos.index'));
        }

        return view('backend.cargos.show')->with('cargo', $cargo);
    }

    /**
     * Show the form for editing the specified Cargo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cargo = $this->cargoRepository->findWithoutFail($id);

        if (empty($cargo)) {
            Flash::error('Cargo not found');

            return redirect(route('backend.cargos.index'));
        }

        return view('backend.cargos.edit')->with('cargo', $cargo);
    }

    /**
     * Update the specified Cargo in storage.
     *
     * @param  int              $id
     * @param UpdateCargoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCargoRequest $request)
    {
        $cargo = $this->cargoRepository->findWithoutFail($id);

        if (empty($cargo)) {
            Flash::error('Cargo not found');

            return redirect(route('backend.cargos.index'));
        }

        $cargo = $this->cargoRepository->update($request->all(), $id);

        Flash::success('Cargo updated successfully.');

        return redirect(route('backend.cargos.index'));
    }

    /**
     * Remove the specified Cargo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cargo = $this->cargoRepository->findWithoutFail($id);

        if (empty($cargo)) {
            Flash::error('Cargo not found');

            return redirect(route('backend.cargos.index'));
        }

        $this->cargoRepository->delete($id);

        Flash::success('Cargo deleted successfully.');

        return redirect(route('backend.cargos.index'));
    }
}
