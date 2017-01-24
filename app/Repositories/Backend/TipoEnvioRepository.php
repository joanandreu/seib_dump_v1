<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TipoEnvio;
use InfyOm\Generator\Common\BaseRepository;

class TipoEnvioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoEnvio::class;
    }
}
