<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Plan;
use InfyOm\Generator\Common\BaseRepository;

class PlanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Plan::class;
    }
}
