<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Persona;
use InfyOm\Generator\Common\BaseRepository;

class PersonaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'ape1',
        'ape2',
        'indicativo',
        'comentarios',
        'fk_cargo',
        'fk_entidad',
        'fecha_alta',
        'fecha_caducidad',
        'fk_tipo_envio'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Persona::class;
    }
}
