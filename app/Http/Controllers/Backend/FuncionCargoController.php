<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateFuncionCargoRequest;
use App\Http\Requests\Backend\UpdateFuncionCargoRequest;
use App\Repositories\Backend\FuncionCargoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FuncionCargoController extends AppBaseController
{
    /** @var  FuncionCargoRepository */
    private $funcionCargoRepository;

    public function __construct(FuncionCargoRepository $funcionCargoRepo)
    {
        $this->funcionCargoRepository = $funcionCargoRepo;
    }

    /**
     * Display a listing of the FuncionCargo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->funcionCargoRepository->pushCriteria(new RequestCriteria($request));
        $funcionCargos = $this->funcionCargoRepository->all();

        return view('backend.funcion_cargos.index')
            ->with('funcionCargos', $funcionCargos);
    }

    /**
     * Show the form for creating a new FuncionCargo.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.funcion_cargos.create');
    }

    /**
     * Store a newly created FuncionCargo in storage.
     *
     * @param CreateFuncionCargoRequest $request
     *
     * @return Response
     */
    public function store(CreateFuncionCargoRequest $request)
    {
        $input = $request->all();

        $funcionCargo = $this->funcionCargoRepository->create($input);

        Flash::success('Funcion Cargo saved successfully.');

        return redirect(route('backend.funcionCargos.index'));
    }

    /**
     * Display the specified FuncionCargo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $funcionCargo = $this->funcionCargoRepository->findWithoutFail($id);

        if (empty($funcionCargo)) {
            Flash::error('Funcion Cargo not found');

            return redirect(route('backend.funcionCargos.index'));
        }

        return view('backend.funcion_cargos.show')->with('funcionCargo', $funcionCargo);
    }

    /**
     * Show the form for editing the specified FuncionCargo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $funcionCargo = $this->funcionCargoRepository->findWithoutFail($id);

        if (empty($funcionCargo)) {
            Flash::error('Funcion Cargo not found');

            return redirect(route('backend.funcionCargos.index'));
        }

        return view('backend.funcion_cargos.edit')->with('funcionCargo', $funcionCargo);
    }

    /**
     * Update the specified FuncionCargo in storage.
     *
     * @param  int              $id
     * @param UpdateFuncionCargoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFuncionCargoRequest $request)
    {
        $funcionCargo = $this->funcionCargoRepository->findWithoutFail($id);

        if (empty($funcionCargo)) {
            Flash::error('Funcion Cargo not found');

            return redirect(route('backend.funcionCargos.index'));
        }

        $funcionCargo = $this->funcionCargoRepository->update($request->all(), $id);

        Flash::success('Funcion Cargo updated successfully.');

        return redirect(route('backend.funcionCargos.index'));
    }

    /**
     * Remove the specified FuncionCargo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $funcionCargo = $this->funcionCargoRepository->findWithoutFail($id);

        if (empty($funcionCargo)) {
            Flash::error('Funcion Cargo not found');

            return redirect(route('backend.funcionCargos.index'));
        }

        $this->funcionCargoRepository->delete($id);

        Flash::success('Funcion Cargo deleted successfully.');

        return redirect(route('backend.funcionCargos.index'));
    }
}
