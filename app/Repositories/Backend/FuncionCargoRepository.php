<?php

namespace App\Repositories\Backend;

use App\Models\Backend\FuncionCargo;
use InfyOm\Generator\Common\BaseRepository;

class FuncionCargoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'nombre',
        'nombre_abr'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FuncionCargo::class;
    }
}
