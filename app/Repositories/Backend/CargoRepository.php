<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Cargo;
use InfyOm\Generator\Common\BaseRepository;

class CargoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cargo',
        'fk_entidad',
        'fk_funcion_cargo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cargo::class;
    }
}
