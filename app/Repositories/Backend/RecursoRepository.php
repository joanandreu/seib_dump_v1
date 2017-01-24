<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Recurso;
use InfyOm\Generator\Common\BaseRepository;

class RecursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod_recurso',
        'descripcion',
        'cantidad',
        'fk_tipo_riesgo',
        'fk_tipo_recurso_humano',
        'fk_material',
        'fk_entidad_recurso',
        'fk_entidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Recurso::class;
    }
}
