<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="CargoRecurso",
 *      required={""},
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
 *          property="fk_recurso",
 *          description="fk_recurso",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class CargoRecurso extends Model
{
    use SoftDeletes;

    public $table = 'cargo_recursos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fk_entidad',
        'fk_recurso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fk_cargo' => 'integer',
        'fk_entidad' => 'integer',
        'fk_recurso' => 'integer'
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
}
