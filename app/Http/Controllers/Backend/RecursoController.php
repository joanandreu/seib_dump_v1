<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateRecursoRequest;
use App\Http\Requests\Backend\UpdateRecursoRequest;
use App\Repositories\Backend\RecursoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RecursoController extends AppBaseController
{
    /** @var  RecursoRepository */
    private $recursoRepository;

    public function __construct(RecursoRepository $recursoRepo)
    {
        $this->recursoRepository = $recursoRepo;
    }

    /**
     * Display a listing of the Recurso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->recursoRepository->pushCriteria(new RequestCriteria($request));
        $recursos = $this->recursoRepository->all();

        return view('backend.recursos.index')
            ->with('recursos', $recursos);
    }

    /**
     * Show the form for creating a new Recurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.recursos.create');
    }

    /**
     * Store a newly created Recurso in storage.
     *
     * @param CreateRecursoRequest $request
     *
     * @return Response
     */
    public function store(CreateRecursoRequest $request)
    {
        $input = $request->all();

        $recurso = $this->recursoRepository->create($input);

        Flash::success('Recurso saved successfully.');

        return redirect(route('backend.recursos.index'));
    }

    /**
     * Display the specified Recurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('backend.recursos.index'));
        }

        return view('backend.recursos.show')->with('recurso', $recurso);
    }

    /**
     * Show the form for editing the specified Recurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('backend.recursos.index'));
        }

        return view('backend.recursos.edit')->with('recurso', $recurso);
    }

    /**
     * Update the specified Recurso in storage.
     *
     * @param  int              $id
     * @param UpdateRecursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRecursoRequest $request)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('backend.recursos.index'));
        }

        $recurso = $this->recursoRepository->update($request->all(), $id);

        Flash::success('Recurso updated successfully.');

        return redirect(route('backend.recursos.index'));
    }

    /**
     * Remove the specified Recurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('backend.recursos.index'));
        }

        $this->recursoRepository->delete($id);

        Flash::success('Recurso deleted successfully.');

        return redirect(route('backend.recursos.index'));
    }
}
