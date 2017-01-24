<?php

namespace App\Repositories\Backend;

use App\Models\Backend\GruposCnae;
use InfyOm\Generator\Common\BaseRepository;

class GruposCnaeRepository extends BaseRepository
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
        return GruposCnae::class;
    }
}
