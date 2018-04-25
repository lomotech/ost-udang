<?php

namespace App\Http\Controllers;

use App\DataTables\XrefStatusDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateXrefStatusRequest;
use App\Http\Requests\UpdateXrefStatusRequest;
use App\Repositories\XrefStatusRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class XrefStatusController extends AppBaseController
{
    /** @var  XrefStatusRepository */
    private $xrefStatusRepository;

    public function __construct(XrefStatusRepository $xrefStatusRepo)
    {
        $this->xrefStatusRepository = $xrefStatusRepo;
    }

    /**
     * Display a listing of the XrefStatus.
     *
     * @param XrefStatusDataTable $xrefStatusDataTable
     * @return Response
     */
    public function index(XrefStatusDataTable $xrefStatusDataTable)
    {
        return $xrefStatusDataTable->render('xrefStatuses.index');
    }

    /**
     * Show the form for creating a new XrefStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('xrefStatuses.create');
    }

    /**
     * Store a newly created XrefStatus in storage.
     *
     * @param CreateXrefStatusRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateXrefStatusRequest $request)
    {
        $input = $request->all();

        $xrefStatus = $this->xrefStatusRepository->create($input);

        Flash::success('XrefStatus saved successfully.');

        return redirect(route('xrefStatuses.index'));
    }

    /**
     * Display the specified XrefStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xrefStatus = $this->xrefStatusRepository->findWithoutFail($id);

        if (empty($xrefStatus)) {
            Flash::error('XrefStatus not found');

            return redirect(route('xrefStatuses.index'));
        }

        return view('xrefStatuses.show')->with('xrefStatus', $xrefStatus);
    }

    /**
     * Show the form for editing the specified XrefStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xrefStatus = $this->xrefStatusRepository->findWithoutFail($id);

        if (empty($xrefStatus)) {
            Flash::error('XrefStatus not found');

            return redirect(route('xrefStatuses.index'));
        }

        return view('xrefStatuses.edit')->with('xrefStatus', $xrefStatus);
    }

    /**
     * Update the specified XrefStatus in storage.
     *
     * @param  int $id
     * @param UpdateXrefStatusRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdateXrefStatusRequest $request)
    {
        $xrefStatus = $this->xrefStatusRepository->findWithoutFail($id);

        if (empty($xrefStatus)) {
            Flash::error('XrefStatus not found');

            return redirect(route('xrefStatuses.index'));
        }

        $xrefStatus = $this->xrefStatusRepository->update($request->all(), $id);

        Flash::success('XrefStatus updated successfully.');

        return redirect(route('xrefStatuses.index'));
    }

    /**
     * Remove the specified XrefStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xrefStatus = $this->xrefStatusRepository->findWithoutFail($id);

        if (empty($xrefStatus)) {
            Flash::error('XrefStatus not found');

            return redirect(route('xrefStatuses.index'));
        }

        $this->xrefStatusRepository->delete($id);

        Flash::success('XrefStatus deleted successfully.');

        return redirect(route('xrefStatuses.index'));
    }
}
