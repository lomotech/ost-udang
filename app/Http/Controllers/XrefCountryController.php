<?php

namespace App\Http\Controllers;

use App\DataTables\XrefCountryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateXrefCountryRequest;
use App\Http\Requests\UpdateXrefCountryRequest;
use App\Repositories\XrefCountryRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class XrefCountryController extends AppBaseController
{
    /** @var  XrefCountryRepository */
    private $xrefCountryRepository;

    public function __construct(XrefCountryRepository $xrefCountryRepo)
    {
        $this->xrefCountryRepository = $xrefCountryRepo;
    }

    /**
     * Display a listing of the XrefCountry.
     *
     * @param XrefCountryDataTable $xrefCountryDataTable
     * @return Response
     */
    public function index(XrefCountryDataTable $xrefCountryDataTable)
    {
        return $xrefCountryDataTable->render('xrefCountries.index');
    }

    /**
     * Show the form for creating a new XrefCountry.
     *
     * @return Response
     */
    public function create()
    {
        return view('xrefCountries.create');
    }

    /**
     * Store a newly created XrefCountry in storage.
     *
     * @param CreateXrefCountryRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateXrefCountryRequest $request)
    {
        $input = $request->all();

        $xrefCountry = $this->xrefCountryRepository->create($input);

        Flash::success('XrefCountry saved successfully.');

        return redirect(route('xrefCountries.index'));
    }

    /**
     * Display the specified XrefCountry.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xrefCountry = $this->xrefCountryRepository->findWithoutFail($id);

        if (empty($xrefCountry)) {
            Flash::error('XrefCountry not found');

            return redirect(route('xrefCountries.index'));
        }

        return view('xrefCountries.show')->with('xrefCountry', $xrefCountry);
    }

    /**
     * Show the form for editing the specified XrefCountry.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xrefCountry = $this->xrefCountryRepository->findWithoutFail($id);

        if (empty($xrefCountry)) {
            Flash::error('XrefCountry not found');

            return redirect(route('xrefCountries.index'));
        }

        return view('xrefCountries.edit')->with('xrefCountry', $xrefCountry);
    }

    /**
     * Update the specified XrefCountry in storage.
     *
     * @param  int $id
     * @param UpdateXrefCountryRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdateXrefCountryRequest $request)
    {
        $xrefCountry = $this->xrefCountryRepository->findWithoutFail($id);

        if (empty($xrefCountry)) {
            Flash::error('XrefCountry not found');

            return redirect(route('xrefCountries.index'));
        }

        $xrefCountry = $this->xrefCountryRepository->update($request->all(), $id);

        Flash::success('XrefCountry updated successfully.');

        return redirect(route('xrefCountries.index'));
    }

    /**
     * Remove the specified XrefCountry from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xrefCountry = $this->xrefCountryRepository->findWithoutFail($id);

        if (empty($xrefCountry)) {
            Flash::error('XrefCountry not found');

            return redirect(route('xrefCountries.index'));
        }

        $this->xrefCountryRepository->delete($id);

        Flash::success('XrefCountry deleted successfully.');

        return redirect(route('xrefCountries.index'));
    }
}
