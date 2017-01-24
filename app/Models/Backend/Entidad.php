<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Entidad",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_tipo_entidad",
 *          description="fk_tipo_entidad",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nombre_abrv",
 *          description="nombre_abrv",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_horario",
 *          description="fk_horario",
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
 *          property="comentarios",
 *          description="comentarios",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cif",
 *          description="cif",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_cnae",
 *          description="fk_cnae",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="actividad",
 *          description="actividad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_loc",
 *          description="fk_loc",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Entidad extends Model
{
    use SoftDeletes;

    public $table = 'entidads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fk_tipo_entidad',
        'nombre',
        'nombre_abrv',
        'fk_horario',
        'fk_entidad',
        'comentarios',
        'cif',
        'fk_cnae',
        'actividad',
        'fk_loc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fk_tipo_entidad' => 'integer',
        'nombre' => 'string',
        'nombre_abrv' => 'string',
        'fk_horario' => 'integer',
        'fk_entidad' => 'integer',
        'comentarios' => 'string',
        'cif' => 'string',
        'fk_cnae' => 'integer',
        'actividad' => 'string',
        'fk_loc' => 'integer'
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
    public function cnae()
    {
        return $this->belongsTo(\App\Models\Backend\Cnae::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function localizacion()
    {
        return $this->belongsTo(\App\Models\Backend\Localizacion::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function recursos()
    {
        return $this->hasMany(\App\Models\Backend\Recurso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function telefonos()
    {
        return $this->hasMany(\App\Models\Backend\Telefono::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function webs()
    {
        return $this->hasMany(\App\Models\Backend\Web::class);
    }
}
