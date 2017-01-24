<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Horario;
use InfyOm\Generator\Common\BaseRepository;

class HorarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nombre_abr',
        'hora_inicio',
        'hora_fin'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Horario::class;
    }
}
