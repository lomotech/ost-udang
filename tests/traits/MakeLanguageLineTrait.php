<?php

use Faker\Factory as Faker;
use App\Models\LanguageLine;
use App\Repositories\LanguageLineRepository;

trait MakeLanguageLineTrait
{
    /**
     * Create fake instance of LanguageLine and save it in database
     *
     * @param array $languageLineFields
     * @return LanguageLine
     */
    public function makeLanguageLine($languageLineFields = [])
    {
        /** @var LanguageLineRepository $languageLineRepo */
        $languageLineRepo = App::make(LanguageLineRepository::class);
        $theme = $this->fakeLanguageLineData($languageLineFields);
        return $languageLineRepo->create($theme);
    }

    /**
     * Get fake instance of LanguageLine
     *
     * @param array $languageLineFields
     * @return LanguageLine
     */
    public function fakeLanguageLine($languageLineFields = [])
    {
        return new LanguageLine($this->fakeLanguageLineData($languageLineFields));
    }

    /**
     * Get fake data of LanguageLine
     *
     * @param array $postFields
     * @return array
     */
    public function fakeLanguageLineData($languageLineFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $languageLineFields);
    }
}
