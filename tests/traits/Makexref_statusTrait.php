<?php

use Faker\Factory as Faker;
use App\Models\xref_status;
use App\Repositories\xref_statusRepository;

trait Makexref_statusTrait
{
    /**
     * Create fake instance of xref_status and save it in database
     *
     * @param array $xrefStatusFields
     * @return xref_status
     */
    public function makexref_status($xrefStatusFields = [])
    {
        /** @var xref_statusRepository $xrefStatusRepo */
        $xrefStatusRepo = App::make(xref_statusRepository::class);
        $theme = $this->fakexref_statusData($xrefStatusFields);
        return $xrefStatusRepo->create($theme);
    }

    /**
     * Get fake instance of xref_status
     *
     * @param array $xrefStatusFields
     * @return xref_status
     */
    public function fakexref_status($xrefStatusFields = [])
    {
        return new xref_status($this->fakexref_statusData($xrefStatusFields));
    }

    /**
     * Get fake data of xref_status
     *
     * @param array $postFields
     * @return array
     */
    public function fakexref_statusData($xrefStatusFields = [])
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
