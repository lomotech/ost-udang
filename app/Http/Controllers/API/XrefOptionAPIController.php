<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateXrefOptionAPIRequest;
use App\Http\Requests\API\UpdateXrefOptionAPIRequest;
use App\Models\XrefOption;
use App\Repositories\XrefOptionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class XrefOptionController
 * @package App\Http\Controllers\API
 */

class XrefOptionAPIController extends InfyOmBaseController
{
    /** @var  XrefOptionRepository */
    private $xrefOptionRepository;

    public function __construct(XrefOptionRepository $xrefOptionRepo)
    {
        $this->xrefOptionRepository = $xrefOptionRepo;
    }

    /**
     * Display a listing of the XrefOption.
     * GET|HEAD /xrefOptions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->xrefOptionRepository->pushCriteria(new RequestCriteria($request));
        $this->xrefOptionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $xrefOptions = $this->xrefOptionRepository->all();

        return $this->sendResponse($xrefOptions->toArray(), 'XrefOptions retrieved successfully');
    }

    /**
     * Store a newly created XrefOption in storage.
     * POST /xrefOptions
     *
     * @param CreateXrefOptionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateXrefOptionAPIRequest $request)
    {
        $input = $request->all();

        $xrefOptions = $this->xrefOptionRepository->create($input);

        return $this->sendResponse($xrefOptions->toArray(), 'XrefOption saved successfully');
    }

    /**
     * Display the specified XrefOption.
     * GET|HEAD /xrefOptions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var XrefOption $xrefOption */
        $xrefOption = $this->xrefOptionRepository->find($id);

        if (empty($xrefOption)) {
            return Response::json(ResponseUtil::makeError('XrefOption not found'), 404);
        }

        return $this->sendResponse($xrefOption->toArray(), 'XrefOption retrieved successfully');
    }

    /**
     * Update the specified XrefOption in storage.
     * PUT/PATCH /xrefOptions/{id}
     *
     * @param  int $id
     * @param UpdateXrefOptionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXrefOptionAPIRequest $request)
    {
        $input = $request->all();

        /** @var XrefOption $xrefOption */
        $xrefOption = $this->xrefOptionRepository->find($id);

        if (empty($xrefOption)) {
            return Response::json(ResponseUtil::makeError('XrefOption not found'), 404);
        }

        $xrefOption = $this->xrefOptionRepository->update($input, $id);

        return $this->sendResponse($xrefOption->toArray(), 'XrefOption updated successfully');
    }

    /**
     * Remove the specified XrefOption from storage.
     * DELETE /xrefOptions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var XrefOption $xrefOption */
        $xrefOption = $this->xrefOptionRepository->find($id);

        if (empty($xrefOption)) {
            return Response::json(ResponseUtil::makeError('XrefOption not found'), 404);
        }

        $xrefOption->delete();

        return $this->sendResponse($id, 'XrefOption deleted successfully');
    }
}
