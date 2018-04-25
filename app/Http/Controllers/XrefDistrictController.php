<?php

namespace App\Http\Controllers;

use App\DataTables\XrefDistrictDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateXrefDistrictRequest;
use App\Http\Requests\UpdateXrefDistrictRequest;
use App\Repositories\XrefDistrictRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class XrefDistrictController extends AppBaseController
{
    /** @var  XrefDistrictRepository */
    private $xrefDistrictRepository;

    public function __construct(XrefDistrictRepository $xrefDistrictRepo)
    {
        $this->xrefDistrictRepository = $xrefDistrictRepo;
    }

    /**
     * Display a listing of the XrefDistrict.
     *
     * @param XrefDistrictDataTable $xrefDistrictDataTable
     * @return Response
     */
    public function index(XrefDistrictDataTable $xrefDistrictDataTable)
    {
        return $xrefDistrictDataTable->render('xrefDistricts.index');
    }

    /**
     * Show the form for creating a new XrefDistrict.
     *
     * @return Response
     */
    public function create()
    {
        return view('xrefDistricts.create');
    }

    /**
     * Store a newly created XrefDistrict in storage.
     *
     * @param CreateXrefDistrictRequest $request
     *
     * @return Response
     */
    public function store(CreateXrefDistrictRequest $request)
    {
        $input = $request->all();

        $xrefDistrict = $this->xrefDistrictRepository->create($input);

        Flash::success('XrefDistrict saved successfully.');

        return redirect(route('xrefDistricts.index'));
    }

    /**
     * Display the specified XrefDistrict.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xrefDistrict = $this->xrefDistrictRepository->findWithoutFail($id);

        if (empty($xrefDistrict)) {
            Flash::error('XrefDistrict not found');

            return redirect(route('xrefDistricts.index'));
        }

        return view('xrefDistricts.show')->with('xrefDistrict', $xrefDistrict);
    }

    /**
     * Show the form for editing the specified XrefDistrict.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xrefDistrict = $this->xrefDistrictRepository->findWithoutFail($id);

        if (empty($xrefDistrict)) {
            Flash::error('XrefDistrict not found');

            return redirect(route('xrefDistricts.index'));
        }

        return view('xrefDistricts.edit')->with('xrefDistrict', $xrefDistrict);
    }

    /**
     * Update the specified XrefDistrict in storage.
     *
     * @param  int              $id
     * @param UpdateXrefDistrictRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXrefDistrictRequest $request)
    {
        $xrefDistrict = $this->xrefDistrictRepository->findWithoutFail($id);

        if (empty($xrefDistrict)) {
            Flash::error('XrefDistrict not found');

            return redirect(route('xrefDistricts.index'));
        }

        $xrefDistrict = $this->xrefDistrictRepository->update($request->all(), $id);

        Flash::success('XrefDistrict updated successfully.');

        return redirect(route('xrefDistricts.index'));
    }

    /**
     * Remove the specified XrefDistrict from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xrefDistrict = $this->xrefDistrictRepository->findWithoutFail($id);

        if (empty($xrefDistrict)) {
            Flash::error('XrefDistrict not found');

            return redirect(route('xrefDistricts.index'));
        }

        $this->xrefDistrictRepository->delete($id);

        Flash::success('XrefDistrict deleted successfully.');

        return redirect(route('xrefDistricts.index'));
    }
}
