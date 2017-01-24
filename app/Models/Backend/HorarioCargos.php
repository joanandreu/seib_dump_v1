<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="HorarioCargos",
 *      required={""},
 *      @SWG\Property(
 *          property="id_cargo",
 *          description="id_cargo",
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
 *          property="fk_horario",
 *          description="fk_horario",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class HorarioCargos extends Model
{
    use SoftDeletes;

    public $table = 'horario_cargos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fk_entidad',
        'fk_horario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cargo' => 'integer',
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
    public function cargo()
    {
        return $this->belongsTo(\App\Models\Backend\Cargo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function horario()
    {
        return $this->belongsTo(\App\Models\Backend\Horario::class);
    }
}
