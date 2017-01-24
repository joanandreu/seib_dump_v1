<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoRiesgo;
use InfyOm\Generator\Common\BaseRepository;

class TipoRiesgoRepository extends BaseRepository
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
        return TipoRiesgo::class;
    }
}
