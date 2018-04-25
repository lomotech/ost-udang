<?php

use Faker\Factory as Faker;
use App\Models\Reporter;
use App\Repositories\ReporterRepository;

trait MakeReporterTrait
{
    /**
     * Create fake instance of Reporter and save it in database
     *
     * @param array $reporterFields
     * @return Reporter
     */
    public function makeReporter($reporterFields = [])
    {
        /** @var ReporterRepository $reporterRepo */
        $reporterRepo = App::make(ReporterRepository::class);
        $theme = $this->fakeReporterData($reporterFields);
        return $reporterRepo->create($theme);
    }

    /**
     * Get fake instance of Reporter
     *
     * @param array $reporterFields
     * @return Reporter
     */
    public function fakeReporter($reporterFields = [])
    {
        return new Reporter($this->fakeReporterData($reporterFields));
    }

    /**
     * Get fake data of Reporter
     *
     * @param array $postFields
     * @return array
     */
    public function fakeReporterData($reporterFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $reporterFields);
    }
}
