<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Telefono;
use InfyOm\Generator\Common\BaseRepository;

class TelefonoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero',
        'fecha_alta',
        'fecha_caducidad',
        'fk_tipo_tel',
        'fk_horario',
        'fk_persona',
        'fk_entidad',
        'fk_cargo',
        'orden',
        'fk_cargo_org'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Telefono::class;
    }
}
