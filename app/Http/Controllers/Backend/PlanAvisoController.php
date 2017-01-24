<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreatePlanAvisoRequest;
use App\Http\Requests\Backend\UpdatePlanAvisoRequest;
use App\Repositories\Backend\PlanAvisoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanAvisoController extends AppBaseController
{
    /** @var  PlanAvisoRepository */
    private $planAvisoRepository;

    public function __construct(PlanAvisoRepository $planAvisoRepo)
    {
        $this->planAvisoRepository = $planAvisoRepo;
    }

    /**
     * Display a listing of the PlanAviso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planAvisoRepository->pushCriteria(new RequestCriteria($request));
        $planAvisos = $this->planAvisoRepository->all();

        return view('backend.plan_avisos.index')
            ->with('planAvisos', $planAvisos);
    }

    /**
     * Show the form for creating a new PlanAviso.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.plan_avisos.create');
    }

    /**
     * Store a newly created PlanAviso in storage.
     *
     * @param CreatePlanAvisoRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanAvisoRequest $request)
    {
        $input = $request->all();

        $planAviso = $this->planAvisoRepository->create($input);

        Flash::success('Plan Aviso saved successfully.');

        return redirect(route('backend.planAvisos.index'));
    }

    /**
     * Display the specified PlanAviso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planAviso = $this->planAvisoRepository->findWithoutFail($id);

        if (empty($planAviso)) {
            Flash::error('Plan Aviso not found');

            return redirect(route('backend.planAvisos.index'));
        }

        return view('backend.plan_avisos.show')->with('planAviso', $planAviso);
    }

    /**
     * Show the form for editing the specified PlanAviso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planAviso = $this->planAvisoRepository->findWithoutFail($id);

        if (empty($planAviso)) {
            Flash::error('Plan Aviso not found');

            return redirect(route('backend.planAvisos.index'));
        }

        return view('backend.plan_avisos.edit')->with('planAviso', $planAviso);
    }

    /**
     * Update the specified PlanAviso in storage.
     *
     * @param  int              $id
     * @param UpdatePlanAvisoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanAvisoRequest $request)
    {
        $planAviso = $this->planAvisoRepository->findWithoutFail($id);

        if (empty($planAviso)) {
            Flash::error('Plan Aviso not found');

            return redirect(route('backend.planAvisos.index'));
        }

        $planAviso = $this->planAvisoRepository->update($request->all(), $id);

        Flash::success('Plan Aviso updated successfully.');

        return redirect(route('backend.planAvisos.index'));
    }

    /**
     * Remove the specified PlanAviso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planAviso = $this->planAvisoRepository->findWithoutFail($id);

        if (empty($planAviso)) {
            Flash::error('Plan Aviso not found');

            return redirect(route('backend.planAvisos.index'));
        }

        $this->planAvisoRepository->delete($id);

        Flash::success('Plan Aviso deleted successfully.');

        return redirect(route('backend.planAvisos.index'));
    }
}
