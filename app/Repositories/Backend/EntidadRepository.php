<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Entidad;
use InfyOm\Generator\Common\BaseRepository;

class EntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_tipo_entidad',
        'nombre',
        'nombre_abrv',
        'fk_horario',
        'fk_entidad',
        'comentarios',
        'cif',
        'fk_cnae',
        'actividad',
        'fk_loc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Entidad::class;
    }
}
