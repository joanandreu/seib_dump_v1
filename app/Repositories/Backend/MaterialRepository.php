<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Material;
use InfyOm\Generator\Common\BaseRepository;

class MaterialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_loc',
        'modelo',
        'matricula',
        'transporte',
        'grua',
        'fk_tipo_material'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Material::class;
    }
}
