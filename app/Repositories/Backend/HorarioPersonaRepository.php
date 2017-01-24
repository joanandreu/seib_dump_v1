<?php

namespace App\Repositories\Backend;

use App\Models\Backend\HorarioPersona;
use InfyOm\Generator\Common\BaseRepository;

class HorarioPersonaRepository extends BaseRepository
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
        return HorarioPersona::class;
    }
}
