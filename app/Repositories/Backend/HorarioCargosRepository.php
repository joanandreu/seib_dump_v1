<?php

namespace App\Repositories\Backend;

use App\Models\Backend\HorarioCargos;
use InfyOm\Generator\Common\BaseRepository;

class HorarioCargosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_entidad',
        'fk_horario'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return HorarioCargos::class;
    }
}
