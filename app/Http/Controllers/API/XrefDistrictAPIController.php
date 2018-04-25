<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateXrefDistrictAPIRequest;
use App\Http\Requests\API\UpdateXrefDistrictAPIRequest;
use App\Models\XrefDistrict;
use App\Repositories\XrefDistrictRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class XrefDistrictController
 * @package App\Http\Controllers\API
 */

class XrefDistrictAPIController extends AppBaseController
{
    /** @var  XrefDistrictRepository */
    private $xrefDistrictRepository;

    public function __construct(XrefDistrictRepository $xrefDistrictRepo)
    {
        $this->xrefDistrictRepository = $xrefDistrictRepo;
    }

    /**
     * Display a listing of the XrefDistrict.
     * GET|HEAD /xrefDistricts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->xrefDistrictRepository->pushCriteria(new RequestCriteria($request));
        $this->xrefDistrictRepository->pushCriteria(new LimitOffsetCriteria($request));
        $xrefDistricts = $this->xrefDistrictRepository->all();

        return $this->sendResponse($xrefDistricts->toArray(), 'XrefDistricts retrieved successfully');
    }

    /**
     * Store a newly created XrefDistrict in storage.
     * POST /xrefDistricts
     *
     * @param CreateXrefDistrictAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateXrefDistrictAPIRequest $request)
    {
        $input = $request->all();

        $xrefDistricts = $this->xrefDistrictRepository->create($input);

        return $this->sendResponse($xrefDistricts->toArray(), 'XrefDistrict saved successfully');
    }

    /**
     * Display the specified XrefDistrict.
     * GET|HEAD /xrefDistricts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var XrefDistrict $xrefDistrict */
        $xrefDistrict = $this->xrefDistrictRepository->find($id);

        if (empty($xrefDistrict)) {
            return Response::json(ResponseUtil::makeError('XrefDistrict not found'), 404);
        }

        return $this->sendResponse($xrefDistrict->toArray(), 'XrefDistrict retrieved successfully');
    }

    /**
     * Update the specified XrefDistrict in storage.
     * PUT/PATCH /xrefDistricts/{id}
     *
     * @param  int $id
     * @param UpdateXrefDistrictAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXrefDistrictAPIRequest $request)
    {
        $input = $request->all();

        /** @var XrefDistrict $xrefDistrict */
        $xrefDistrict = $this->xrefDistrictRepository->find($id);

        if (empty($xrefDistrict)) {
            return Response::json(ResponseUtil::makeError('XrefDistrict not found'), 404);
        }

        $xrefDistrict = $this->xrefDistrictRepository->update($input, $id);

        return $this->sendResponse($xrefDistrict->toArray(), 'XrefDistrict updated successfully');
    }

    /**
     * Remove the specified XrefDistrict from storage.
     * DELETE /xrefDistricts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var XrefDistrict $xrefDistrict */
        $xrefDistrict = $this->xrefDistrictRepository->find($id);

        if (empty($xrefDistrict)) {
            return Response::json(ResponseUtil::makeError('XrefDistrict not found'), 404);
        }

        $xrefDistrict->delete();

        return $this->sendResponse($id, 'XrefDistrict deleted successfully');
    }
}
