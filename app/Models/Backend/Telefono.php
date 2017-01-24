<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Telefono",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="numero",
 *          description="numero",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fecha_alta",
 *          description="fecha_alta",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="fecha_caducidad",
 *          description="fecha_caducidad",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="fk_tipo_tel",
 *          description="fk_tipo_tel",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_horario",
 *          description="fk_horario",
 *          type="integer",
 *          format="int32"
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
class Telefono extends Model
{
    use SoftDeletes;

    public $table = 'telefonos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'numero',
        'fecha_alta',
        'fecha_caducidad',
        'fk_tipo_tel',
        'fk_horario',
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
        'numero' => 'string',
        'fecha_alta' => 'date',
        'fecha_caducidad' => 'date',
        'fk_tipo_tel' => 'integer',
        'fk_horario' => 'integer',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function horario()
    {
        return $this->belongsTo(\App\Models\Backend\Horario::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoTelefono()
    {
        return $this->belongsTo(\App\Models\Backend\TipoTelefono::class);
    }
}
