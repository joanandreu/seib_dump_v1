<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Localizacion;
use InfyOm\Generator\Common\BaseRepository;

class LocalizacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lid',
        'municipio',
        'nucleo',
        'calle',
        'numero',
        'piso',
        'escalaera',
        'cp',
        'longitude',
        'latitude'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Localizacion::class;
    }
}
