<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateXrefCountryAPIRequest;
use App\Http\Requests\API\UpdateXrefCountryAPIRequest;
use App\Models\XrefCountry;
use App\Repositories\XrefCountryRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class XrefCountryController
 * @package App\Http\Controllers\API
 */

class XrefCountryAPIController extends AppBaseController
{
    /** @var  XrefCountryRepository */
    private $xrefCountryRepository;

    public function __construct(XrefCountryRepository $xrefCountryRepo)
    {
        $this->xrefCountryRepository = $xrefCountryRepo;
    }

    /**
     * Display a listing of the XrefCountry.
     * GET|HEAD /xrefCountries
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->xrefCountryRepository->pushCriteria(new RequestCriteria($request));
        $this->xrefCountryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $xrefCountries = $this->xrefCountryRepository->all();

        return $this->sendResponse($xrefCountries->toArray(), 'XrefCountries retrieved successfully');
    }

    /**
     * Store a newly created XrefCountry in storage.
     * POST /xrefCountries
     *
     * @param CreateXrefCountryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateXrefCountryAPIRequest $request)
    {
        $input = $request->all();

        $xrefCountries = $this->xrefCountryRepository->create($input);

        return $this->sendResponse($xrefCountries->toArray(), 'XrefCountry saved successfully');
    }

    /**
     * Display the specified XrefCountry.
     * GET|HEAD /xrefCountries/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var XrefCountry $xrefCountry */
        $xrefCountry = $this->xrefCountryRepository->find($id);

        if (empty($xrefCountry)) {
            return Response::json(ResponseUtil::makeError('XrefCountry not found'), 404);
        }

        return $this->sendResponse($xrefCountry->toArray(), 'XrefCountry retrieved successfully');
    }

    /**
     * Update the specified XrefCountry in storage.
     * PUT/PATCH /xrefCountries/{id}
     *
     * @param  int $id
     * @param UpdateXrefCountryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXrefCountryAPIRequest $request)
    {
        $input = $request->all();

        /** @var XrefCountry $xrefCountry */
        $xrefCountry = $this->xrefCountryRepository->find($id);

        if (empty($xrefCountry)) {
            return Response::json(ResponseUtil::makeError('XrefCountry not found'), 404);
        }

        $xrefCountry = $this->xrefCountryRepository->update($input, $id);

        return $this->sendResponse($xrefCountry->toArray(), 'XrefCountry updated successfully');
    }

    /**
     * Remove the specified XrefCountry from storage.
     * DELETE /xrefCountries/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var XrefCountry $xrefCountry */
        $xrefCountry = $this->xrefCountryRepository->find($id);

        if (empty($xrefCountry)) {
            return Response::json(ResponseUtil::makeError('XrefCountry not found'), 404);
        }

        $xrefCountry->delete();

        return $this->sendResponse($id, 'XrefCountry deleted successfully');
    }
}
