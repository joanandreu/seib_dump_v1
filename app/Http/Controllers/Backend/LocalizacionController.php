<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateLocalizacionRequest;
use App\Http\Requests\Backend\UpdateLocalizacionRequest;
use App\Repositories\Backend\LocalizacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LocalizacionController extends AppBaseController
{
    /** @var  LocalizacionRepository */
    private $localizacionRepository;

    public function __construct(LocalizacionRepository $localizacionRepo)
    {
        $this->localizacionRepository = $localizacionRepo;
    }

    /**
     * Display a listing of the Localizacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->localizacionRepository->pushCriteria(new RequestCriteria($request));
        $localizacions = $this->localizacionRepository->all();

        return view('backend.localizacions.index')
            ->with('localizacions', $localizacions);
    }

    /**
     * Show the form for creating a new Localizacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.localizacions.create');
    }

    /**
     * Store a newly created Localizacion in storage.
     *
     * @param CreateLocalizacionRequest $request
     *
     * @return Response
     */
    public function store(CreateLocalizacionRequest $request)
    {
        $input = $request->all();

        $localizacion = $this->localizacionRepository->create($input);

        Flash::success('Localizacion saved successfully.');

        return redirect(route('backend.localizacions.index'));
    }

    /**
     * Display the specified Localizacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $localizacion = $this->localizacionRepository->findWithoutFail($id);

        if (empty($localizacion)) {
            Flash::error('Localizacion not found');

            return redirect(route('backend.localizacions.index'));
        }

        return view('backend.localizacions.show')->with('localizacion', $localizacion);
    }

    /**
     * Show the form for editing the specified Localizacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $localizacion = $this->localizacionRepository->findWithoutFail($id);

        if (empty($localizacion)) {
            Flash::error('Localizacion not found');

            return redirect(route('backend.localizacions.index'));
        }

        return view('backend.localizacions.edit')->with('localizacion', $localizacion);
    }

    /**
     * Update the specified Localizacion in storage.
     *
     * @param  int              $id
     * @param UpdateLocalizacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocalizacionRequest $request)
    {
        $localizacion = $this->localizacionRepository->findWithoutFail($id);

        if (empty($localizacion)) {
            Flash::error('Localizacion not found');

            return redirect(route('backend.localizacions.index'));
        }

        $localizacion = $this->localizacionRepository->update($request->all(), $id);

        Flash::success('Localizacion updated successfully.');

        return redirect(route('backend.localizacions.index'));
    }

    /**
     * Remove the specified Localizacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $localizacion = $this->localizacionRepository->findWithoutFail($id);

        if (empty($localizacion)) {
            Flash::error('Localizacion not found');

            return redirect(route('backend.localizacions.index'));
        }

        $this->localizacionRepository->delete($id);

        Flash::success('Localizacion deleted successfully.');

        return redirect(route('backend.localizacions.index'));
    }
}
