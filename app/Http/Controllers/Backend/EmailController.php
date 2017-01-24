<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateEmailRequest;
use App\Http\Requests\Backend\UpdateEmailRequest;
use App\Repositories\Backend\EmailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmailController extends AppBaseController
{
    /** @var  EmailRepository */
    private $emailRepository;

    public function __construct(EmailRepository $emailRepo)
    {
        $this->emailRepository = $emailRepo;
    }

    /**
     * Display a listing of the Email.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->emailRepository->pushCriteria(new RequestCriteria($request));
        $emails = $this->emailRepository->all();

        return view('backend.emails.index')
            ->with('emails', $emails);
    }

    /**
     * Show the form for creating a new Email.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.emails.create');
    }

    /**
     * Store a newly created Email in storage.
     *
     * @param CreateEmailRequest $request
     *
     * @return Response
     */
    public function store(CreateEmailRequest $request)
    {
        $input = $request->all();

        $email = $this->emailRepository->create($input);

        Flash::success('Email saved successfully.');

        return redirect(route('backend.emails.index'));
    }

    /**
     * Display the specified Email.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $email = $this->emailRepository->findWithoutFail($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('backend.emails.index'));
        }

        return view('backend.emails.show')->with('email', $email);
    }

    /**
     * Show the form for editing the specified Email.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $email = $this->emailRepository->findWithoutFail($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('backend.emails.index'));
        }

        return view('backend.emails.edit')->with('email', $email);
    }

    /**
     * Update the specified Email in storage.
     *
     * @param  int              $id
     * @param UpdateEmailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmailRequest $request)
    {
        $email = $this->emailRepository->findWithoutFail($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('backend.emails.index'));
        }

        $email = $this->emailRepository->update($request->all(), $id);

        Flash::success('Email updated successfully.');

        return redirect(route('backend.emails.index'));
    }

    /**
     * Remove the specified Email from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $email = $this->emailRepository->findWithoutFail($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('backend.emails.index'));
        }

        $this->emailRepository->delete($id);

        Flash::success('Email deleted successfully.');

        return redirect(route('backend.emails.index'));
    }
}
