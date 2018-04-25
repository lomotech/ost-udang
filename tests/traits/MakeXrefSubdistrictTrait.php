<?php

use Faker\Factory as Faker;
use App\Models\XrefSubdistrict;
use App\Repositories\XrefSubdistrictRepository;

trait MakeXrefSubdistrictTrait
{
    /**
     * Create fake instance of XrefSubdistrict and save it in database
     *
     * @param array $xrefSubdistrictFields
     * @return XrefSubdistrict
     */
    public function makeXrefSubdistrict($xrefSubdistrictFields = [])
    {
        /** @var XrefSubdistrictRepository $xrefSubdistrictRepo */
        $xrefSubdistrictRepo = App::make(XrefSubdistrictRepository::class);
        $theme = $this->fakeXrefSubdistrictData($xrefSubdistrictFields);
        return $xrefSubdistrictRepo->create($theme);
    }

    /**
     * Get fake instance of XrefSubdistrict
     *
     * @param array $xrefSubdistrictFields
     * @return XrefSubdistrict
     */
    public function fakeXrefSubdistrict($xrefSubdistrictFields = [])
    {
        return new XrefSubdistrict($this->fakeXrefSubdistrictData($xrefSubdistrictFields));
    }

    /**
     * Get fake data of XrefSubdistrict
     *
     * @param array $postFields
     * @return array
     */
    public function fakeXrefSubdistrictData($xrefSubdistrictFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'ddsa_code' => $fake->word,
            'level' => $fake->word,
            'xref_district_id' => $fake->randomDigitNotNull,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefSubdistrictFields);
    }
}
