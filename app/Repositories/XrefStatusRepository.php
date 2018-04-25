<?php

namespace App\Repositories;

use App\Models\XrefStatus;
use InfyOm\Generator\Common\BaseRepository;

class XrefStatusRepository extends BaseRepository
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
        return XrefStatus::class;
    }
}
