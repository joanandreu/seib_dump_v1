<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoMaterial;
use InfyOm\Generator\Common\BaseRepository;

class TipoMaterialRepository extends BaseRepository
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
        return TipoMaterial::class;
    }
}
