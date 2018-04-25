<?php

namespace App\Repositories;

use App\Models\LanguageLine;
use InfyOm\Generator\Common\BaseRepository;

class LanguageLineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LanguageLine::class;
    }
}
