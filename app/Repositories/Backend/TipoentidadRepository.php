<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoEntidad;
use InfyOm\Generator\Common\BaseRepository;

class TipoEntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nombre_abrv'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoEntidad::class;
    }
}
