<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateXrefSubdistrictAPIRequest;
use App\Http\Requests\API\UpdateXrefSubdistrictAPIRequest;
use App\Models\XrefSubdistrict;
use App\Repositories\XrefSubdistrictRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class XrefSubdistrictController
 * @package App\Http\Controllers\API
 */

class XrefSubdistrictAPIController extends AppBaseController
{
    /** @var  XrefSubdistrictRepository */
    private $xrefSubdistrictRepository;

    public function __construct(XrefSubdistrictRepository $xrefSubdistrictRepo)
    {
        $this->xrefSubdistrictRepository = $xrefSubdistrictRepo;
    }

    /**
     * Display a listing of the XrefSubdistrict.
     * GET|HEAD /xrefSubdistricts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->xrefSubdistrictRepository->pushCriteria(new RequestCriteria($request));
        $this->xrefSubdistrictRepository->pushCriteria(new LimitOffsetCriteria($request));
        $xrefSubdistricts = $this->xrefSubdistrictRepository->all();

        return $this->sendResponse($xrefSubdistricts->toArray(), 'XrefSubdistricts retrieved successfully');
    }

    /**
     * Store a newly created XrefSubdistrict in storage.
     * POST /xrefSubdistricts
     *
     * @param CreateXrefSubdistrictAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateXrefSubdistrictAPIRequest $request)
    {
        $input = $request->all();

        $xrefSubdistricts = $this->xrefSubdistrictRepository->create($input);

        return $this->sendResponse($xrefSubdistricts->toArray(), 'XrefSubdistrict saved successfully');
    }

    /**
     * Display the specified XrefSubdistrict.
     * GET|HEAD /xrefSubdistricts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var XrefSubdistrict $xrefSubdistrict */
        $xrefSubdistrict = $this->xrefSubdistrictRepository->find($id);

        if (empty($xrefSubdistrict)) {
            return Response::json(ResponseUtil::makeError('XrefSubdistrict not found'), 404);
        }

        return $this->sendResponse($xrefSubdistrict->toArray(), 'XrefSubdistrict retrieved successfully');
    }

    /**
     * Update the specified XrefSubdistrict in storage.
     * PUT/PATCH /xrefSubdistricts/{id}
     *
     * @param  int $id
     * @param UpdateXrefSubdistrictAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXrefSubdistrictAPIRequest $request)
    {
        $input = $request->all();

        /** @var XrefSubdistrict $xrefSubdistrict */
        $xrefSubdistrict = $this->xrefSubdistrictRepository->find($id);

        if (empty($xrefSubdistrict)) {
            return Response::json(ResponseUtil::makeError('XrefSubdistrict not found'), 404);
        }

        $xrefSubdistrict = $this->xrefSubdistrictRepository->update($input, $id);

        return $this->sendResponse($xrefSubdistrict->toArray(), 'XrefSubdistrict updated successfully');
    }

    /**
     * Remove the specified XrefSubdistrict from storage.
     * DELETE /xrefSubdistricts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var XrefSubdistrict $xrefSubdistrict */
        $xrefSubdistrict = $this->xrefSubdistrictRepository->find($id);

        if (empty($xrefSubdistrict)) {
            return Response::json(ResponseUtil::makeError('XrefSubdistrict not found'), 404);
        }

        $xrefSubdistrict->delete();

        return $this->sendResponse($id, 'XrefSubdistrict deleted successfully');
    }
}
