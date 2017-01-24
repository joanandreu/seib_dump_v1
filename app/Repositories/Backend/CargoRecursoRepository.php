<?php

namespace App\Repositories\Backend;

use App\Models\Backend\CargoRecurso;
use InfyOm\Generator\Common\BaseRepository;

class CargoRecursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_entidad',
        'fk_recurso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CargoRecurso::class;
    }
}
