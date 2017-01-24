<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Persona",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ape1",
 *          description="ape1",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ape2",
 *          description="ape2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="indicativo",
 *          description="indicativo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="comentarios",
 *          description="comentarios",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_cargo",
 *          description="fk_cargo",
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
 *          property="fk_tipo_envio",
 *          description="fk_tipo_envio",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Persona extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'ape1',
        'ape2',
        'indicativo',
        'comentarios',
        'fk_cargo',
        'fk_entidad',
        'fecha_alta',
        'fecha_caducidad',
        'fk_tipo_envio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'ape1' => 'string',
        'ape2' => 'string',
        'indicativo' => 'string',
        'comentarios' => 'string',
        'fk_cargo' => 'integer',
        'fk_entidad' => 'integer',
        'fecha_alta' => 'date',
        'fecha_caducidad' => 'date',
        'fk_tipo_envio' => 'integer'
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
    public function tipoEnvio()
    {
        return $this->belongsTo(\App\Models\Backend\TipoEnvio::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function gruposAvisos()
    {
        return $this->belongsToMany(\App\Models\Backend\GruposAviso::class, 'grupo_personas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function horarios()
    {
        return $this->belongsToMany(\App\Models\Backend\Horario::class, 'horario_personas');
    }
}
