<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Recurso",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="cod_recurso",
 *          description="cod_recurso",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="descripcion",
 *          description="descripcion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cantidad",
 *          description="cantidad",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_tipo_riesgo",
 *          description="fk_tipo_riesgo",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_tipo_recurso_humano",
 *          description="fk_tipo_recurso_humano",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_material",
 *          description="fk_material",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_entidad_recurso",
 *          description="fk_entidad_recurso",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_entidad",
 *          description="fk_entidad",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Recurso extends Model
{
    use SoftDeletes;

    public $table = 'recursos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cod_recurso',
        'descripcion',
        'cantidad',
        'fk_tipo_riesgo',
        'fk_tipo_recurso_humano',
        'fk_material',
        'fk_entidad_recurso',
        'fk_entidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cod_recurso' => 'string',
        'descripcion' => 'string',
        'cantidad' => 'integer',
        'fk_tipo_riesgo' => 'integer',
        'fk_tipo_recurso_humano' => 'integer',
        'fk_material' => 'integer',
        'fk_entidad_recurso' => 'integer',
        'fk_entidad' => 'integer'
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
    public function material()
    {
        return $this->belongsTo(\App\Models\Backend\Material::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoRecursoHumano()
    {
        return $this->belongsTo(\App\Models\Backend\TipoRecursoHumano::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoRiesgo()
    {
        return $this->belongsTo(\App\Models\Backend\TipoRiesgo::class);
    }
}
