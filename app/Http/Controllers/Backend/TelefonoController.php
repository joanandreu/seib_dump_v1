<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTelefonoRequest;
use App\Http\Requests\Backend\UpdateTelefonoRequest;
use App\Repositories\Backend\TelefonoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TelefonoController extends AppBaseController
{
    /** @var  TelefonoRepository */
    private $telefonoRepository;

    public function __construct(TelefonoRepository $telefonoRepo)
    {
        $this->telefonoRepository = $telefonoRepo;
    }

    /**
     * Display a listing of the Telefono.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->telefonoRepository->pushCriteria(new RequestCriteria($request));
        $telefonos = $this->telefonoRepository->all();

        return view('backend.telefonos.index')
            ->with('telefonos', $telefonos);
    }

    /**
     * Show the form for creating a new Telefono.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.telefonos.create');
    }

    /**
     * Store a newly created Telefono in storage.
     *
     * @param CreateTelefonoRequest $request
     *
     * @return Response
     */
    public function store(CreateTelefonoRequest $request)
    {
        $input = $request->all();

        $telefono = $this->telefonoRepository->create($input);

        Flash::success('Telefono saved successfully.');

        return redirect(route('backend.telefonos.index'));
    }

    /**
     * Display the specified Telefono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $telefono = $this->telefonoRepository->findWithoutFail($id);

        if (empty($telefono)) {
            Flash::error('Telefono not found');

            return redirect(route('backend.telefonos.index'));
        }

        return view('backend.telefonos.show')->with('telefono', $telefono);
    }

    /**
     * Show the form for editing the specified Telefono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $telefono = $this->telefonoRepository->findWithoutFail($id);

        if (empty($telefono)) {
            Flash::error('Telefono not found');

            return redirect(route('backend.telefonos.index'));
        }

        return view('backend.telefonos.edit')->with('telefono', $telefono);
    }

    /**
     * Update the specified Telefono in storage.
     *
     * @param  int              $id
     * @param UpdateTelefonoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTelefonoRequest $request)
    {
        $telefono = $this->telefonoRepository->findWithoutFail($id);

        if (empty($telefono)) {
            Flash::error('Telefono not found');

            return redirect(route('backend.telefonos.index'));
        }

        $telefono = $this->telefonoRepository->update($request->all(), $id);

        Flash::success('Telefono updated successfully.');

        return redirect(route('backend.telefonos.index'));
    }

    /**
     * Remove the specified Telefono from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $telefono = $this->telefonoRepository->findWithoutFail($id);

        if (empty($telefono)) {
            Flash::error('Telefono not found');

            return redirect(route('backend.telefonos.index'));
        }

        $this->telefonoRepository->delete($id);

        Flash::success('Telefono deleted successfully.');

        return redirect(route('backend.telefonos.index'));
    }
}
