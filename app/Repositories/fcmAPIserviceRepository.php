<?php

namespace App\Repositories;

use App\Models\fcmAPIservice;
use InfyOm\Generator\Common\BaseRepository;

class fcmAPIserviceRepository extends BaseRepository
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
        return fcmAPIservice::class;
    }
}
