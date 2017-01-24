<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="GrupoPersonas",
 *      required={""},
 *      @SWG\Property(
 *          property="fk_grupo",
 *          description="fk_grupo",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_persona",
 *          description="fk_persona",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class GrupoPersonas extends Model
{
    use SoftDeletes;

    public $table = 'grupo_personas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fk_persona'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fk_grupo' => 'integer',
        'fk_persona' => 'integer'
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
    public function gruposAviso()
    {
        return $this->belongsTo(\App\Models\Backend\GruposAviso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function persona()
    {
        return $this->belongsTo(\App\Models\Backend\Persona::class);
    }
}
