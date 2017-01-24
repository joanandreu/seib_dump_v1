<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoRecursoHumano;
use InfyOm\Generator\Common\BaseRepository;

class TipoRecursoHumanoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoRecursoHumano::class;
    }
}
