<?php

namespace App\Repositories;

use App\Models\XrefCountry;
use InfyOm\Generator\Common\BaseRepository;

class XrefCountryRepository extends BaseRepository
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
        return XrefCountry::class;
    }
}
