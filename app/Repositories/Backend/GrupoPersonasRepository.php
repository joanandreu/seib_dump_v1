<?php

namespace App\Repositories\Backend;

use App\Models\Backend\GrupoPersonas;
use InfyOm\Generator\Common\BaseRepository;

class GrupoPersonasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_persona'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GrupoPersonas::class;
    }
}
