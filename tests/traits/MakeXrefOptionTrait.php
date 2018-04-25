<?php

use Faker\Factory as Faker;
use App\Models\XrefOption;
use App\Repositories\XrefOptionRepository;

trait MakeXrefOptionTrait
{
    /**
     * Create fake instance of XrefOption and save it in database
     *
     * @param array $xrefOptionFields
     * @return XrefOption
     */
    public function makeXrefOption($xrefOptionFields = [])
    {
        /** @var XrefOptionRepository $xrefOptionRepo */
        $xrefOptionRepo = App::make(XrefOptionRepository::class);
        $theme = $this->fakeXrefOptionData($xrefOptionFields);
        return $xrefOptionRepo->create($theme);
    }

    /**
     * Get fake instance of XrefOption
     *
     * @param array $xrefOptionFields
     * @return XrefOption
     */
    public function fakeXrefOption($xrefOptionFields = [])
    {
        return new XrefOption($this->fakeXrefOptionData($xrefOptionFields));
    }

    /**
     * Get fake data of XrefOption
     *
     * @param array $postFields
     * @return array
     */
    public function fakeXrefOptionData($xrefOptionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'value' => $fake->text,
            'autoload' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefOptionFields);
    }
}
