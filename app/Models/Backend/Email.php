<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Email",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="comentarios",
 *          description="comentarios",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_persona",
 *          description="fk_persona",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_entidad",
 *          description="fk_entidad",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_cargo",
 *          description="fk_cargo",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="orden",
 *          description="orden",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_cargo_org",
 *          description="fk_cargo_org",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Email extends Model
{
    use SoftDeletes;

    public $table = 'emails';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'email',
        'comentarios',
        'fk_persona',
        'fk_entidad',
        'fk_cargo',
        'orden',
        'fk_cargo_org'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'comentarios' => 'string',
        'fk_persona' => 'integer',
        'fk_entidad' => 'integer',
        'fk_cargo' => 'integer',
        'orden' => 'integer',
        'fk_cargo_org' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function entidad()
    {
        return $this->belongsTo(\App\Models\Backend\Entidad::class);
    }
}
