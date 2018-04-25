<?php

namespace App\Http\Controllers;

use App\DataTables\XrefOptionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateXrefOptionRequest;
use App\Http\Requests\UpdateXrefOptionRequest;
use App\Repositories\XrefOptionRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class XrefOptionController extends AppBaseController
{
    /** @var  XrefOptionRepository */
    private $xrefOptionRepository;

    public function __construct(XrefOptionRepository $xrefOptionRepo)
    {
        $this->xrefOptionRepository = $xrefOptionRepo;
    }

    /**
     * Display a listing of the XrefOption.
     *
     * @param XrefOptionDataTable $xrefOptionDataTable
     * @return Response
     */
    public function index(XrefOptionDataTable $xrefOptionDataTable)
    {
        return $xrefOptionDataTable->render('xrefOptions.index');
    }

    /**
     * Show the form for creating a new XrefOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('xrefOptions.create');
    }

    /**
     * Store a newly created XrefOption in storage.
     *
     * @param CreateXrefOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateXrefOptionRequest $request)
    {
        $input = $request->all();

        $xrefOption = $this->xrefOptionRepository->create($input);

        Flash::success('XrefOption saved successfully.');

        return redirect(route('xrefOptions.index'));
    }

    /**
     * Display the specified XrefOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xrefOption = $this->xrefOptionRepository->findWithoutFail($id);

        if (empty($xrefOption)) {
            Flash::error('XrefOption not found');

            return redirect(route('xrefOptions.index'));
        }

        return view('xrefOptions.show')->with('xrefOption', $xrefOption);
    }

    /**
     * Show the form for editing the specified XrefOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xrefOption = $this->xrefOptionRepository->findWithoutFail($id);

        if (empty($xrefOption)) {
            Flash::error('XrefOption not found');

            return redirect(route('xrefOptions.index'));
        }

        return view('xrefOptions.edit')->with('xrefOption', $xrefOption);
    }

    /**
     * Update the specified XrefOption in storage.
     *
     * @param  int              $id
     * @param UpdateXrefOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXrefOptionRequest $request)
    {
        $xrefOption = $this->xrefOptionRepository->findWithoutFail($id);

        if (empty($xrefOption)) {
            Flash::error('XrefOption not found');

            return redirect(route('xrefOptions.index'));
        }

        $xrefOption = $this->xrefOptionRepository->update($request->all(), $id);

        Flash::success('XrefOption updated successfully.');

        return redirect(route('xrefOptions.index'));
    }

    /**
     * Remove the specified XrefOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xrefOption = $this->xrefOptionRepository->findWithoutFail($id);

        if (empty($xrefOption)) {
            Flash::error('XrefOption not found');

            return redirect(route('xrefOptions.index'));
        }

        $this->xrefOptionRepository->delete($id);

        Flash::success('XrefOption deleted successfully.');

        return redirect(route('xrefOptions.index'));
    }
}
