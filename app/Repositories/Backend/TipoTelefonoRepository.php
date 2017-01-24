<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoTelefono;
use InfyOm\Generator\Common\BaseRepository;

class TipoTelefonoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoTelefono::class;
    }
}
