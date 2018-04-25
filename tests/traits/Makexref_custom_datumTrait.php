<?php

use Faker\Factory as Faker;
use App\Models\xref_custom_datum;
use App\Repositories\xref_custom_datumRepository;

trait Makexref_custom_datumTrait
{
    /**
     * Create fake instance of xref_custom_datum and save it in database
     *
     * @param array $xrefCustomDatumFields
     * @return xref_custom_datum
     */
    public function makexref_custom_datum($xrefCustomDatumFields = [])
    {
        /** @var xref_custom_datumRepository $xrefCustomDatumRepo */
        $xrefCustomDatumRepo = App::make(xref_custom_datumRepository::class);
        $theme = $this->fakexref_custom_datumData($xrefCustomDatumFields);
        return $xrefCustomDatumRepo->create($theme);
    }

    /**
     * Get fake instance of xref_custom_datum
     *
     * @param array $xrefCustomDatumFields
     * @return xref_custom_datum
     */
    public function fakexref_custom_datum($xrefCustomDatumFields = [])
    {
        return new xref_custom_datum($this->fakexref_custom_datumData($xrefCustomDatumFields));
    }

    /**
     * Get fake data of xref_custom_datum
     *
     * @param array $postFields
     * @return array
     */
    public function fakexref_custom_datumData($xrefCustomDatumFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'param_1' => $fake->word,
            'param_2' => $fake->word,
            'param_3' => $fake->word,
            'param_4' => $fake->word,
            'param_5' => $fake->word,
            'xref_custom_category_id' => $fake->randomDigitNotNull,
            'xref_custom_datum_id' => $fake->randomDigitNotNull,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefCustomDatumFields);
    }
}
