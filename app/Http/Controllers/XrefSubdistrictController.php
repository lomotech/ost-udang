<?php

namespace App\Http\Controllers;

use App\DataTables\XrefSubdistrictDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateXrefSubdistrictRequest;
use App\Http\Requests\UpdateXrefSubdistrictRequest;
use App\Repositories\XrefSubdistrictRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class XrefSubdistrictController extends AppBaseController
{
    /** @var  XrefSubdistrictRepository */
    private $xrefSubdistrictRepository;

    public function __construct(XrefSubdistrictRepository $xrefSubdistrictRepo)
    {
        $this->xrefSubdistrictRepository = $xrefSubdistrictRepo;
    }

    /**
     * Display a listing of the XrefSubdistrict.
     *
     * @param XrefSubdistrictDataTable $xrefSubdistrictDataTable
     * @return Response
     */
    public function index(XrefSubdistrictDataTable $xrefSubdistrictDataTable)
    {
        return $xrefSubdistrictDataTable->render('xrefSubdistricts.index');
    }

    /**
     * Show the form for creating a new XrefSubdistrict.
     *
     * @return Response
     */
    public function create()
    {
        return view('xrefSubdistricts.create');
    }

    /**
     * Store a newly created XrefSubdistrict in storage.
     *
     * @param CreateXrefSubdistrictRequest $request
     *
     * @return Response
     */
    public function store(CreateXrefSubdistrictRequest $request)
    {
        $input = $request->all();

        $xrefSubdistrict = $this->xrefSubdistrictRepository->create($input);

        Flash::success('XrefSubdistrict saved successfully.');

        return redirect(route('xrefSubdistricts.index'));
    }

    /**
     * Display the specified XrefSubdistrict.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xrefSubdistrict = $this->xrefSubdistrictRepository->findWithoutFail($id);

        if (empty($xrefSubdistrict)) {
            Flash::error('XrefSubdistrict not found');

            return redirect(route('xrefSubdistricts.index'));
        }

        return view('xrefSubdistricts.show')->with('xrefSubdistrict', $xrefSubdistrict);
    }

    /**
     * Show the form for editing the specified XrefSubdistrict.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xrefSubdistrict = $this->xrefSubdistrictRepository->findWithoutFail($id);

        if (empty($xrefSubdistrict)) {
            Flash::error('XrefSubdistrict not found');

            return redirect(route('xrefSubdistricts.index'));
        }

        return view('xrefSubdistricts.edit')->with('xrefSubdistrict', $xrefSubdistrict);
    }

    /**
     * Update the specified XrefSubdistrict in storage.
     *
     * @param  int              $id
     * @param UpdateXrefSubdistrictRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXrefSubdistrictRequest $request)
    {
        $xrefSubdistrict = $this->xrefSubdistrictRepository->findWithoutFail($id);

        if (empty($xrefSubdistrict)) {
            Flash::error('XrefSubdistrict not found');

            return redirect(route('xrefSubdistricts.index'));
        }

        $xrefSubdistrict = $this->xrefSubdistrictRepository->update($request->all(), $id);

        Flash::success('XrefSubdistrict updated successfully.');

        return redirect(route('xrefSubdistricts.index'));
    }

    /**
     * Remove the specified XrefSubdistrict from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xrefSubdistrict = $this->xrefSubdistrictRepository->findWithoutFail($id);

        if (empty($xrefSubdistrict)) {
            Flash::error('XrefSubdistrict not found');

            return redirect(route('xrefSubdistricts.index'));
        }

        $this->xrefSubdistrictRepository->delete($id);

        Flash::success('XrefSubdistrict deleted successfully.');

        return redirect(route('xrefSubdistricts.index'));
    }
}
