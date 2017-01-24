<?php

namespace App\Repositories\Backend;

use App\Models\Backend\PlanAviso;
use InfyOm\Generator\Common\BaseRepository;

class PlanAvisoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_plan',
        'fk_cargo',
        'fk_entidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanAviso::class;
    }
}
