<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Horario",
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
 *          property="nombre_abr",
 *          description="nombre_abr",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="hora_inicio",
 *          description="hora_inicio",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="hora_fin",
 *          description="hora_fin",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Horario extends Model
{
    use SoftDeletes;

    public $table = 'horarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'nombre_abr',
        'hora_inicio',
        'hora_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'nombre_abr' => 'string',
        'hora_inicio' => 'integer',
        'hora_fin' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function cargos()
    {
        return $this->belongsToMany(\App\Models\Backend\Cargo::class, 'horario_cargos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function entidads()
    {
        return $this->belongsToMany(\App\Models\Backend\Entidad::class, 'horario_entidads');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function personas()
    {
        return $this->belongsToMany(\App\Models\Backend\Persona::class, 'horario_personas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function telefonos()
    {
        return $this->hasMany(\App\Models\Backend\Telefono::class);
    }
}
