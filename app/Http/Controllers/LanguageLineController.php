<?php

namespace App\Http\Controllers;

use App\DataTables\LanguageLineDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLanguageLineRequest;
use App\Http\Requests\UpdateLanguageLineRequest;
use App\Repositories\LanguageLineRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class LanguageLineController extends AppBaseController
{
    /** @var  LanguageLineRepository */
    private $languageLineRepository;

    public function __construct(LanguageLineRepository $languageLineRepo)
    {
        $this->languageLineRepository = $languageLineRepo;
    }

    /**
     * Display a listing of the LanguageLine.
     *
     * @param LanguageLineDataTable $languageLineDataTable
     * @return Response
     */
    public function index(LanguageLineDataTable $languageLineDataTable)
    {
        return $languageLineDataTable->render('languageLines.index');
    }

    /**
     * Show the form for creating a new LanguageLine.
     *
     * @return Response
     */
    public function create()
    {
        return view('languageLines.create');
    }

    /**
     * Store a newly created LanguageLine in storage.
     *
     * @param CreateLanguageLineRequest $request
     *
     * @return Response
     */
    public function store(CreateLanguageLineRequest $request)
    {
        $input = $request->all();

        $languageLine = $this->languageLineRepository->create($input);

        Flash::success('LanguageLine saved successfully.');

        return redirect(route('languageLines.index'));
    }

    /**
     * Display the specified LanguageLine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $languageLine = $this->languageLineRepository->findWithoutFail($id);

        if (empty($languageLine)) {
            Flash::error('LanguageLine not found');

            return redirect(route('languageLines.index'));
        }

        return view('languageLines.show')->with('languageLine', $languageLine);
    }

    /**
     * Show the form for editing the specified LanguageLine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $languageLine = $this->languageLineRepository->findWithoutFail($id);

        if (empty($languageLine)) {
            Flash::error('LanguageLine not found');

            return redirect(route('languageLines.index'));
        }

        return view('languageLines.edit')->with('languageLine', $languageLine);
    }

    /**
     * Update the specified LanguageLine in storage.
     *
     * @param  int              $id
     * @param UpdateLanguageLineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanguageLineRequest $request)
    {
        $languageLine = $this->languageLineRepository->findWithoutFail($id);

        if (empty($languageLine)) {
            Flash::error('LanguageLine not found');

            return redirect(route('languageLines.index'));
        }

        $languageLine = $this->languageLineRepository->update($request->all(), $id);

        Flash::success('LanguageLine updated successfully.');

        return redirect(route('languageLines.index'));
    }

    /**
     * Remove the specified LanguageLine from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $languageLine = $this->languageLineRepository->findWithoutFail($id);

        if (empty($languageLine)) {
            Flash::error('LanguageLine not found');

            return redirect(route('languageLines.index'));
        }

        $this->languageLineRepository->delete($id);

        Flash::success('LanguageLine deleted successfully.');

        return redirect(route('languageLines.index'));
    }
}
