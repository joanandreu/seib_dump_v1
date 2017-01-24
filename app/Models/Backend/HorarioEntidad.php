<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="HorarioEntidad",
 *      required={""},
 *      @SWG\Property(
 *          property="fk_entidad",
 *          description="fk_entidad",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_horario",
 *          description="fk_horario",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class HorarioEntidad extends Model
{
    use SoftDeletes;

    public $table = 'horario_entidads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fk_horario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fk_entidad' => 'integer',
        'fk_horario' => 'integer'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function horario()
    {
        return $this->belongsTo(\App\Models\Backend\Horario::class);
    }
}
