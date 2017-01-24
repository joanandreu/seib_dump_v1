<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Email;
use InfyOm\Generator\Common\BaseRepository;

class EmailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'comentarios',
        'fk_persona',
        'fk_entidad',
        'fk_cargo',
        'orden',
        'fk_cargo_org'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Email::class;
    }
}
