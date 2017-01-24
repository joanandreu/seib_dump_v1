<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Cargo",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="cargo",
 *          description="cargo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_entidad",
 *          description="fk_entidad",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_funcion_cargo",
 *          description="fk_funcion_cargo",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Cargo extends Model
{
    use SoftDeletes;

    public $table = 'cargos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cargo',
        'fk_entidad',
        'fk_funcion_cargo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cargo' => 'string',
        'fk_entidad' => 'integer',
        'fk_funcion_cargo' => 'integer'
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
    public function funcionCargo()
    {
        return $this->belongsTo(\App\Models\Backend\FuncionCargo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function cargoRecurso()
    {
        return $this->hasOne(\App\Models\Backend\CargoRecurso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function horarios()
    {
        return $this->belongsToMany(\App\Models\Backend\Horario::class, 'horario_cargos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function planes()
    {
        return $this->belongsToMany(\App\Models\Backend\Plane::class, 'plan_avisos');
    }
}
