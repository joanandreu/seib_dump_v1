<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateCnaeRequest;
use App\Http\Requests\Backend\UpdateCnaeRequest;
use App\Repositories\Backend\CnaeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CnaeController extends AppBaseController
{
    /** @var  CnaeRepository */
    private $cnaeRepository;

    public function __construct(CnaeRepository $cnaeRepo)
    {
        $this->cnaeRepository = $cnaeRepo;
    }

    /**
     * Display a listing of the Cnae.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cnaeRepository->pushCriteria(new RequestCriteria($request));
        $cnaes = $this->cnaeRepository->all();

        return view('backend.cnaes.index')
            ->with('cnaes', $cnaes);
    }

    /**
     * Show the form for creating a new Cnae.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cnaes.create');
    }

    /**
     * Store a newly created Cnae in storage.
     *
     * @param CreateCnaeRequest $request
     *
     * @return Response
     */
    public function store(CreateCnaeRequest $request)
    {
        $input = $request->all();

        $cnae = $this->cnaeRepository->create($input);

        Flash::success('Cnae saved successfully.');

        return redirect(route('backend.cnaes.index'));
    }

    /**
     * Display the specified Cnae.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cnae = $this->cnaeRepository->findWithoutFail($id);

        if (empty($cnae)) {
            Flash::error('Cnae not found');

            return redirect(route('backend.cnaes.index'));
        }

        return view('backend.cnaes.show')->with('cnae', $cnae);
    }

    /**
     * Show the form for editing the specified Cnae.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cnae = $this->cnaeRepository->findWithoutFail($id);

        if (empty($cnae)) {
            Flash::error('Cnae not found');

            return redirect(route('backend.cnaes.index'));
        }

        return view('backend.cnaes.edit')->with('cnae', $cnae);
    }

    /**
     * Update the specified Cnae in storage.
     *
     * @param  int              $id
     * @param UpdateCnaeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCnaeRequest $request)
    {
        $cnae = $this->cnaeRepository->findWithoutFail($id);

        if (empty($cnae)) {
            Flash::error('Cnae not found');

            return redirect(route('backend.cnaes.index'));
        }

        $cnae = $this->cnaeRepository->update($request->all(), $id);

        Flash::success('Cnae updated successfully.');

        return redirect(route('backend.cnaes.index'));
    }

    /**
     * Remove the specified Cnae from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cnae = $this->cnaeRepository->findWithoutFail($id);

        if (empty($cnae)) {
            Flash::error('Cnae not found');

            return redirect(route('backend.cnaes.index'));
        }

        $this->cnaeRepository->delete($id);

        Flash::success('Cnae deleted successfully.');

        return redirect(route('backend.cnaes.index'));
    }
}
