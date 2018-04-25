<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateXrefStatusAPIRequest;
use App\Http\Requests\API\UpdateXrefStatusAPIRequest;
use App\Models\XrefStatus;
use App\Repositories\XrefStatusRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class XrefStatusController
 * @package App\Http\Controllers\API
 */

class XrefStatusAPIController extends AppBaseController
{
    /** @var  XrefStatusRepository */
    private $xrefStatusRepository;

    public function __construct(XrefStatusRepository $xrefStatusRepo)
    {
        $this->xrefStatusRepository = $xrefStatusRepo;
    }

    /**
     * Display a listing of the XrefStatus.
     * GET|HEAD /xrefStatuses
     *
     * @param Request $request
     * @return Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $this->xrefStatusRepository->pushCriteria(new RequestCriteria($request));
        $this->xrefStatusRepository->pushCriteria(new LimitOffsetCriteria($request));
        $xrefStatuses = $this->xrefStatusRepository->all();

        return $this->sendResponse($xrefStatuses->toArray(), 'XrefStatuses retrieved successfully');
    }

    /**
     * Store a newly created XrefStatus in storage.
     * POST /xrefStatuses
     *
     * @param CreateXrefStatusAPIRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateXrefStatusAPIRequest $request)
    {
        $input = $request->all();

        $xrefStatuses = $this->xrefStatusRepository->create($input);

        return $this->sendResponse($xrefStatuses->toArray(), 'XrefStatus saved successfully');
    }

    /**
     * Display the specified XrefStatus.
     * GET|HEAD /xrefStatuses/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var XrefStatus $xrefStatus */
        $xrefStatus = $this->xrefStatusRepository->find($id);

        if (empty($xrefStatus)) {
            return Response::json(ResponseUtil::makeError('XrefStatus not found'), 404);
        }

        return $this->sendResponse($xrefStatus->toArray(), 'XrefStatus retrieved successfully');
    }

    /**
     * Update the specified XrefStatus in storage.
     * PUT/PATCH /xrefStatuses/{id}
     *
     * @param  int $id
     * @param UpdateXrefStatusAPIRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdateXrefStatusAPIRequest $request)
    {
        $input = $request->all();

        /** @var XrefStatus $xrefStatus */
        $xrefStatus = $this->xrefStatusRepository->find($id);

        if (empty($xrefStatus)) {
            return Response::json(ResponseUtil::makeError('XrefStatus not found'), 404);
        }

        $xrefStatus = $this->xrefStatusRepository->update($input, $id);

        return $this->sendResponse($xrefStatus->toArray(), 'XrefStatus updated successfully');
    }

    /**
     * Remove the specified XrefStatus from storage.
     * DELETE /xrefStatuses/{id}
     *
     * @param  int $id
     *
     * @return Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var XrefStatus $xrefStatus */
        $xrefStatus = $this->xrefStatusRepository->find($id);

        if (empty($xrefStatus)) {
            return Response::json(ResponseUtil::makeError('XrefStatus not found'), 404);
        }

        $xrefStatus->delete();

        return $this->sendResponse($id, 'XrefStatus deleted successfully');
    }
}
