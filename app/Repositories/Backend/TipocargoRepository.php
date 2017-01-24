<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Tipocargo;
use InfyOm\Generator\Common\BaseRepository;

class TipocargoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cargo',
        'abreviatura',
        'fk_tipoentidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tipocargo::class;
    }
}
