<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Web;
use InfyOm\Generator\Common\BaseRepository;

class WebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'url',
        'fk_entidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Web::class;
    }
}
