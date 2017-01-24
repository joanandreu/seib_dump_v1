<?php

namespace App\Repositories\Backend;

use App\Models\Backend\GruposAviso;
use InfyOm\Generator\Common\BaseRepository;

class GruposAvisoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nombre_abr',
        'codigo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GruposAviso::class;
    }
}
