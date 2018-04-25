<?php

use Faker\Factory as Faker;
use App\Models\XrefStates;
use App\Repositories\XrefStateRepository;

trait MakeXrefStateTrait
{
    /**
     * Create fake instance of XrefStates and save it in database
     *
     * @param array $xrefStatesFields
     * @return XrefStates
     */
    public function makeXrefStates($xrefStatesFields = [])
    {
        /** @var XrefStateRepository $xrefStatesRepo */
        $xrefStatesRepo = App::make(XrefStateRepository::class);
        $theme = $this->fakeXrefStatesData($xrefStatesFields);
        return $xrefStatesRepo->create($theme);
    }

    /**
     * Get fake instance of XrefStates
     *
     * @param array $xrefStatesFields
     * @return XrefStates
     */
    public function fakeXrefStates($xrefStatesFields = [])
    {
        return new XrefStates($this->fakeXrefStatesData($xrefStatesFields));
    }

    /**
     * Get fake data of XrefStates
     *
     * @param array $postFields
     * @return array
     */
    public function fakeXrefStatesData($xrefStatesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'name_long' => $fake->word,
            'ddsa_code' => $fake->word,
            'alpha_2' => $fake->word,
            'alpha_3' => $fake->word,
            'capital' => $fake->word,
            'xref_country_id' => $fake->randomDigitNotNull,
            'active_at' => $fake->word,
            'inactive_at' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefStatesFields);
    }
}
