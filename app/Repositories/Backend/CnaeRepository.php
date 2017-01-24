<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Cnae;
use InfyOm\Generator\Common\BaseRepository;

class CnaeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'descripcion',
        'fk_grupo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cnae::class;
    }
}
