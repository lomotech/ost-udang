<?php

namespace App\Repositories;

use App\Models\XrefState;
use InfyOm\Generator\Common\BaseRepository;

class XrefStateRepository extends BaseRepository
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
        return XrefState::class;
    }
}
