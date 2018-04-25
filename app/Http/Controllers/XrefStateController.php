<?php

namespace App\Http\Controllers;

use App\DataTables\XrefStatesDataTable;
use App\Http\Requests\CreateXrefStatesRequest;
use App\Http\Requests\UpdateXrefStatesRequest;
use App\Repositories\XrefStateRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class XrefStateController extends AppBaseController
{
    /** @var  XrefStateRepository */
    private $xrefStatesRepository;

    public function __construct(XrefStateRepository $xrefStatesRepo)
    {
        $this->xrefStatesRepository = $xrefStatesRepo;
    }

    /**
     * Display a listing of the XrefStates.
     *
     * @param XrefStatesDataTable $xrefStatesDataTable
     * @return Response
     */
    public function index(XrefStatesDataTable $xrefStatesDataTable)
    {
        return $xrefStatesDataTable->render('xrefStates.index');
    }

    /**
     * Show the form for creating a new XrefStates.
     *
     * @return Response
     */
    public function create()
    {
        return view('xrefStates.create');
    }

    /**
     * Store a newly created XrefStates in storage.
     *
     * @param CreateXrefStatesRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateXrefStatesRequest $request)
    {
        $input = $request->all();

        $xrefStates = $this->xrefStatesRepository->create($input);

        Flash::success('XrefStates saved successfully.');

        return redirect(route('xrefStates.index'));
    }

    /**
     * Display the specified XrefStates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xrefStates = $this->xrefStatesRepository->findWithoutFail($id);

        if (empty($xrefStates)) {
            Flash::error('XrefStates not found');

            return redirect(route('xrefStates.index'));
        }

        return view('xrefStates.show')->with('xrefStates', $xrefStates);
    }

    /**
     * Show the form for editing the specified XrefStates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xrefStates = $this->xrefStatesRepository->findWithoutFail($id);

        if (empty($xrefStates)) {
            Flash::error('XrefStates not found');

            return redirect(route('xrefStates.index'));
        }

        return view('xrefStates.edit')->with('xrefStates', $xrefStates);
    }

    /**
     * Update the specified XrefStates in storage.
     *
     * @param  int $id
     * @param UpdateXrefStatesRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdateXrefStatesRequest $request)
    {
        $xrefStates = $this->xrefStatesRepository->findWithoutFail($id);

        if (empty($xrefStates)) {
            Flash::error('XrefStates not found');

            return redirect(route('xrefStates.index'));
        }

        $xrefStates = $this->xrefStatesRepository->update($request->all(), $id);

        Flash::success('XrefStates updated successfully.');

        return redirect(route('xrefStates.index'));
    }

    /**
     * Remove the specified XrefStates from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xrefStates = $this->xrefStatesRepository->findWithoutFail($id);

        if (empty($xrefStates)) {
            Flash::error('XrefStates not found');

            return redirect(route('xrefStates.index'));
        }

        $this->xrefStatesRepository->delete($id);

        Flash::success('XrefStates deleted successfully.');

        return redirect(route('xrefStates.index'));
    }
}
