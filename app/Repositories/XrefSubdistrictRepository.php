<?php

namespace App\Repositories;

use App\Models\XrefSubdistrict;
use InfyOm\Generator\Common\BaseRepository;

class XrefSubdistrictRepository extends BaseRepository
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
        return XrefSubdistrict::class;
    }
}
