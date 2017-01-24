<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateWebRequest;
use App\Http\Requests\Backend\UpdateWebRequest;
use App\Repositories\Backend\WebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class WebController extends AppBaseController
{
    /** @var  WebRepository */
    private $webRepository;

    public function __construct(WebRepository $webRepo)
    {
        $this->webRepository = $webRepo;
    }

    /**
     * Display a listing of the Web.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->webRepository->pushCriteria(new RequestCriteria($request));
        $webs = $this->webRepository->all();

        return view('backend.webs.index')
            ->with('webs', $webs);
    }

    /**
     * Show the form for creating a new Web.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.webs.create');
    }

    /**
     * Store a newly created Web in storage.
     *
     * @param CreateWebRequest $request
     *
     * @return Response
     */
    public function store(CreateWebRequest $request)
    {
        $input = $request->all();

        $web = $this->webRepository->create($input);

        Flash::success('Web saved successfully.');

        return redirect(route('backend.webs.index'));
    }

    /**
     * Display the specified Web.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $web = $this->webRepository->findWithoutFail($id);

        if (empty($web)) {
            Flash::error('Web not found');

            return redirect(route('backend.webs.index'));
        }

        return view('backend.webs.show')->with('web', $web);
    }

    /**
     * Show the form for editing the specified Web.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $web = $this->webRepository->findWithoutFail($id);

        if (empty($web)) {
            Flash::error('Web not found');

            return redirect(route('backend.webs.index'));
        }

        return view('backend.webs.edit')->with('web', $web);
    }

    /**
     * Update the specified Web in storage.
     *
     * @param  int              $id
     * @param UpdateWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWebRequest $request)
    {
        $web = $this->webRepository->findWithoutFail($id);

        if (empty($web)) {
            Flash::error('Web not found');

            return redirect(route('backend.webs.index'));
        }

        $web = $this->webRepository->update($request->all(), $id);

        Flash::success('Web updated successfully.');

        return redirect(route('backend.webs.index'));
    }

    /**
     * Remove the specified Web from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $web = $this->webRepository->findWithoutFail($id);

        if (empty($web)) {
            Flash::error('Web not found');

            return redirect(route('backend.webs.index'));
        }

        $this->webRepository->delete($id);

        Flash::success('Web deleted successfully.');

        return redirect(route('backend.webs.index'));
    }
}
