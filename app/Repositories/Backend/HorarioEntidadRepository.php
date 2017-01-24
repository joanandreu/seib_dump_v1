<?php

namespace App\Repositories\Backend;

use App\Models\Backend\HorarioEntidad;
use InfyOm\Generator\Common\BaseRepository;

class HorarioEntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_horario'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return HorarioEntidad::class;
    }
}
