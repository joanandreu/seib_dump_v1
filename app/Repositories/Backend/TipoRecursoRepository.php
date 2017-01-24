<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoRecurso;
use InfyOm\Generator\Common\BaseRepository;

class TipoRecursoRepository extends BaseRepository
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
        return TipoRecurso::class;
    }
}
