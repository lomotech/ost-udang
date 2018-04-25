<?php

use Faker\Factory as Faker;
use App\Models\XrefStatus;
use App\Repositories\XrefStatusRepository;

trait MakeXrefStatusTrait
{
    /**
     * Create fake instance of XrefStatus and save it in database
     *
     * @param array $xrefStatusFields
     * @return XrefStatus
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function makeXrefStatus($xrefStatusFields = [])
    {
        /** @var XrefStatusRepository $xrefStatusRepo */
        $xrefStatusRepo = App::make(XrefStatusRepository::class);
        $theme = $this->fakeXrefStatusData($xrefStatusFields);
        return $xrefStatusRepo->create($theme);
    }

    /**
     * Get fake instance of XrefStatus
     *
     * @param array $xrefStatusFields
     * @return XrefStatus
     */
    public function fakeXrefStatus($xrefStatusFields = [])
    {
        return new XrefStatus($this->fakeXrefStatusData($xrefStatusFields));
    }

    /**
     * Get fake data of XrefStatus
     *
     * @param array $xrefStatusFields
     * @return array
     */
    public function fakeXrefStatusData($xrefStatusFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefStatusFields);
    }
}
