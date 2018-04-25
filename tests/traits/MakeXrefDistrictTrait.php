<?php

use Faker\Factory as Faker;
use App\Models\XrefDistrict;
use App\Repositories\XrefDistrictRepository;

trait MakeXrefDistrictTrait
{
    /**
     * Create fake instance of XrefDistrict and save it in database
     *
     * @param array $xrefDistrictFields
     * @return XrefDistrict
     */
    public function makeXrefDistrict($xrefDistrictFields = [])
    {
        /** @var XrefDistrictRepository $xrefDistrictRepo */
        $xrefDistrictRepo = App::make(XrefDistrictRepository::class);
        $theme = $this->fakeXrefDistrictData($xrefDistrictFields);
        return $xrefDistrictRepo->create($theme);
    }

    /**
     * Get fake instance of XrefDistrict
     *
     * @param array $xrefDistrictFields
     * @return XrefDistrict
     */
    public function fakeXrefDistrict($xrefDistrictFields = [])
    {
        return new XrefDistrict($this->fakeXrefDistrictData($xrefDistrictFields));
    }

    /**
     * Get fake data of XrefDistrict
     *
     * @param array $postFields
     * @return array
     */
    public function fakeXrefDistrictData($xrefDistrictFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'ddsa_code' => $fake->word,
            'alpha_3' => $fake->word,
            'xref_state_id' => $fake->randomDigitNotNull,
            'active_at' => $fake->word,
            'inactive_at' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefDistrictFields);
    }
}
