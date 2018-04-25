<?php

namespace App\Repositories;

use App\Models\XrefOption;
use InfyOm\Generator\Common\BaseRepository;

class XrefOptionRepository extends BaseRepository
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
        return XrefOption::class;
    }
}
