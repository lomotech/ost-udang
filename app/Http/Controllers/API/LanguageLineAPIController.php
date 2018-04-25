<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLanguageLineAPIRequest;
use App\Http\Requests\API\UpdateLanguageLineAPIRequest;
use App\Models\LanguageLine;
use App\Repositories\LanguageLineRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class LanguageLineController
 * @package App\Http\Controllers\API
 */

class LanguageLineAPIController extends AppBaseController
{
    /** @var  LanguageLineRepository */
    private $languageLineRepository;

    public function __construct(LanguageLineRepository $languageLineRepo)
    {
        $this->languageLineRepository = $languageLineRepo;
    }

    /**
     * Display a listing of the LangClass App\Http\Controllers\Auth\AuthControlleruageLine.
     * GET|HEAD /languageLines
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->languageLineRepository->pushCriteria(new RequestCriteria($request));
        $this->languageLineRepository->pushCriteria(new LimitOffsetCriteria($request));
        $languageLines = $this->languageLineRepository->all();

        return $this->sendResponse($languageLines->toArray(), 'LanguageLines retrieved successfully');
    }

    /**
     * Store a newly created LanguageLine in storage.
     * POST /languageLines
     *
     * @param CreateLanguageLineAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLanguageLineAPIRequest $request)
    {
        $input = $request->all();

        $languageLines = $this->languageLineRepository->create($input);

        return $this->sendResponse($languageLines->toArray(), 'LanguageLine saved successfully');
    }

    /**
     * Display the specified LanguageLine.
     * GET|HEAD /languageLines/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var LanguageLine $languageLine */
        $languageLine = $this->languageLineRepository->find($id);

        if (empty($languageLine)) {
            return Response::json(ResponseUtil::makeError('LanguageLine not found'), 404);
        }

        return $this->sendResponse($languageLine->toArray(), 'LanguageLine retrieved successfully');
    }

    /**
     * Update the specified LanguageLine in storage.
     * PUT/PATCH /languageLines/{id}
     *
     * @param  int $id
     * @param UpdateLanguageLineAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanguageLineAPIRequest $request)
    {
        $input = $request->all();

        /** @var LanguageLine $languageLine */
        $languageLine = $this->languageLineRepository->find($id);

        if (empty($languageLine)) {
            return Response::json(ResponseUtil::makeError('LanguageLine not found'), 404);
        }

        $languageLine = $this->languageLineRepository->update($input, $id);

        return $this->sendResponse($languageLine->toArray(), 'LanguageLine updated successfully');
    }

    /**
     * Remove the specified LanguageLine from storage.
     * DELETE /languageLines/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var LanguageLine $languageLine */
        $languageLine = $this->languageLineRepository->find($id);

        if (empty($languageLine)) {
            return Response::json(ResponseUtil::makeError('LanguageLine not found'), 404);
        }

        $languageLine->delete();

        return $this->sendResponse($id, 'LanguageLine deleted successfully');
    }
}
