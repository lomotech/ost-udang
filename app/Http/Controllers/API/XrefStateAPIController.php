<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateXrefStatesAPIRequest;
use App\Http\Requests\API\UpdateXrefStatesAPIRequest;
use App\Repositories\XrefStateRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class XrefStatesController
 * @package App\Http\Controllers\API
 */

class XrefStateAPIController extends AppBaseController
{
    /** @var  XrefStateRepository */
    private $xrefStatesRepository;

    public function __construct(XrefStateRepository $xrefStatesRepo)
    {
        $this->xrefStatesRepository = $xrefStatesRepo;
    }

    /**
     * Display a listing of the XrefStates.
     * GET|HEAD /xrefStates
     *
     * @param Request $request
     * @return Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $this->xrefStatesRepository->pushCriteria(new RequestCriteria($request));
        $this->xrefStatesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $xrefStates = $this->xrefStatesRepository->all();

        return $this->sendResponse($xrefStates->toArray(), 'XrefStates retrieved successfully');
    }

    /**
     * Store a newly created XrefStates in storage.
     * POST /xrefStates
     *
     * @param CreateXrefStatesAPIRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateXrefStatesAPIRequest $request)
    {
        $input = $request->all();

        $xrefStates = $this->xrefStatesRepository->create($input);

        return $this->sendResponse($xrefStates->toArray(), 'XrefStates saved successfully');
    }

    /**
     * Display the specified XrefStates.
     * GET|HEAD /xrefStates/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var XrefStates $xrefStates */
        $xrefStates = $this->xrefStatesRepository->find($id);

        if (empty($xrefStates)) {
            return Response::json(ResponseUtil::makeError('XrefStates not found'), 404);
        }

        return $this->sendResponse($xrefStates->toArray(), 'XrefStates retrieved successfully');
    }

    /**
     * Update the specified XrefStates in storage.
     * PUT/PATCH /xrefStates/{id}
     *
     * @param  int $id
     * @param UpdateXrefStatesAPIRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdateXrefStatesAPIRequest $request)
    {
        $input = $request->all();

        /** @var XrefStates $xrefStates */
        $xrefStates = $this->xrefStatesRepository->find($id);

        if (empty($xrefStates)) {
            return Response::json(ResponseUtil::makeError('XrefStates not found'), 404);
        }

        $xrefStates = $this->xrefStatesRepository->update($input, $id);

        return $this->sendResponse($xrefStates->toArray(), 'XrefStates updated successfully');
    }

    /**
     * Remove the specified XrefStates from storage.
     * DELETE /xrefStates/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var XrefStates $xrefStates */
        $xrefStates = $this->xrefStatesRepository->find($id);

        if (empty($xrefStates)) {
            return Response::json(ResponseUtil::makeError('XrefStates not found'), 404);
        }

        $xrefStates->delete();

        return $this->sendResponse($id, 'XrefStates deleted successfully');
    }
}
