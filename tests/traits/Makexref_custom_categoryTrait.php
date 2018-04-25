<?php

use Faker\Factory as Faker;
use App\Models\xref_custom_category;
use App\Repositories\xref_custom_categoryRepository;

trait Makexref_custom_categoryTrait
{
    /**
     * Create fake instance of xref_custom_category and save it in database
     *
     * @param array $xrefCustomCategoryFields
     * @return xref_custom_category
     */
    public function makexref_custom_category($xrefCustomCategoryFields = [])
    {
        /** @var xref_custom_categoryRepository $xrefCustomCategoryRepo */
        $xrefCustomCategoryRepo = App::make(xref_custom_categoryRepository::class);
        $theme = $this->fakexref_custom_categoryData($xrefCustomCategoryFields);
        return $xrefCustomCategoryRepo->create($theme);
    }

    /**
     * Get fake instance of xref_custom_category
     *
     * @param array $xrefCustomCategoryFields
     * @return xref_custom_category
     */
    public function fakexref_custom_category($xrefCustomCategoryFields = [])
    {
        return new xref_custom_category($this->fakexref_custom_categoryData($xrefCustomCategoryFields));
    }

    /**
     * Get fake data of xref_custom_category
     *
     * @param array $postFields
     * @return array
     */
    public function fakexref_custom_categoryData($xrefCustomCategoryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $xrefCustomCategoryFields);
    }
}
