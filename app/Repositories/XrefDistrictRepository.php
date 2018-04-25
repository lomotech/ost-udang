<?php

namespace App\Repositories;

use App\Models\XrefDistrict;
use InfyOm\Generator\Common\BaseRepository;

class XrefDistrictRepository extends BaseRepository
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
        return XrefDistrict::class;
    }
}
