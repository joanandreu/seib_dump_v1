<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateCargoRecursoRequest;
use App\Http\Requests\Backend\UpdateCargoRecursoRequest;
use App\Repositories\Backend\CargoRecursoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CargoRecursoController extends AppBaseController
{
    /** @var  CargoRecursoRepository */
    private $cargoRecursoRepository;

    public function __construct(CargoRecursoRepository $cargoRecursoRepo)
    {
        $this->cargoRecursoRepository = $cargoRecursoRepo;
    }

    /**
     * Display a listing of the CargoRecurso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cargoRecursoRepository->pushCriteria(new RequestCriteria($request));
        $cargoRecursos = $this->cargoRecursoRepository->all();

        return view('backend.cargo_recursos.index')
            ->with('cargoRecursos', $cargoRecursos);
    }

    /**
     * Show the form for creating a new CargoRecurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cargo_recursos.create');
    }

    /**
     * Store a newly created CargoRecurso in storage.
     *
     * @param CreateCargoRecursoRequest $request
     *
     * @return Response
     */
    public function store(CreateCargoRecursoRequest $request)
    {
        $input = $request->all();

        $cargoRecurso = $this->cargoRecursoRepository->create($input);

        Flash::success('Cargo Recurso saved successfully.');

        return redirect(route('backend.cargoRecursos.index'));
    }

    /**
     * Display the specified CargoRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cargoRecurso = $this->cargoRecursoRepository->findWithoutFail($id);

        if (empty($cargoRecurso)) {
            Flash::error('Cargo Recurso not found');

            return redirect(route('backend.cargoRecursos.index'));
        }

        return view('backend.cargo_recursos.show')->with('cargoRecurso', $cargoRecurso);
    }

    /**
     * Show the form for editing the specified CargoRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cargoRecurso = $this->cargoRecursoRepository->findWithoutFail($id);

        if (empty($cargoRecurso)) {
            Flash::error('Cargo Recurso not found');

            return redirect(route('backend.cargoRecursos.index'));
        }

        return view('backend.cargo_recursos.edit')->with('cargoRecurso', $cargoRecurso);
    }

    /**
     * Update the specified CargoRecurso in storage.
     *
     * @param  int              $id
     * @param UpdateCargoRecursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCargoRecursoRequest $request)
    {
        $cargoRecurso = $this->cargoRecursoRepository->findWithoutFail($id);

        if (empty($cargoRecurso)) {
            Flash::error('Cargo Recurso not found');

            return redirect(route('backend.cargoRecursos.index'));
        }

        $cargoRecurso = $this->cargoRecursoRepository->update($request->all(), $id);

        Flash::success('Cargo Recurso updated successfully.');

        return redirect(route('backend.cargoRecursos.index'));
    }

    /**
     * Remove the specified CargoRecurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cargoRecurso = $this->cargoRecursoRepository->findWithoutFail($id);

        if (empty($cargoRecurso)) {
            Flash::error('Cargo Recurso not found');

            return redirect(route('backend.cargoRecursos.index'));
        }

        $this->cargoRecursoRepository->delete($id);

        Flash::success('Cargo Recurso deleted successfully.');

        return redirect(route('backend.cargoRecursos.index'));
    }
}
