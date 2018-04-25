<?php

use Faker\Factory as Faker;
use App\Models\XrefCountry;
use App\Repositories\XrefCountryRepository;

trait MakeXrefCountryTrait
{
    /**
     * Create fake instance of XrefCountry and save it in database
     *
     * @param array $xrefCountryFields
     * @return XrefCountry
     */
    public function makeXrefCountry($xrefCountryFields = [])
    {
        /** @var XrefCountryRepository $xrefCountryRepo */
        $xrefCountryRepo = App::make(XrefCountryRepository::class);
        $theme = $this->fakeXrefCountryData($xrefCountryFields);
        return $xrefCountryRepo->create($theme);
    }

    /**
     * Get fake instance of XrefCountry
     *
     * @param array $xrefCountryFields
     * @return XrefCountry
     */
    public function fakeXrefCountry($xrefCountryFields = [])
    {
        return new XrefCountry($this->fakeXrefCountryData($xrefCountryFields));
    }

    /**
     * Get fake data of XrefCountry
     *
     * @param array $postFields
     * @return array
     */
    public function fakeXrefCountryData($xrefCountryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'ddsa_code' => $fake->word,
            'alpha_2' => $fake->word,
            'alpha_3' => $fake->word,
            'olympic' => $fake->word,
            'fifa' => $fake->word,
            'currency_name' => $fake->word,
            'currency_alpha' => $fake->word,
            'currency_minor_decimal' => $fake->word,
            'capital' => $fake->word,
            'nationality' => $fake->word,
            'latitude' => $fake->word,
            'longitude' => $fake->word,
            'active_at' => $fake->word,
            'inactive_at' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefCountryFields);
    }
}
