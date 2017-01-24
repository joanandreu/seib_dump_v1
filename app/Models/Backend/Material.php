<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Material",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fk_loc",
 *          description="fk_loc",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="modelo",
 *          description="modelo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="matricula",
 *          description="matricula",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="transporte",
 *          description="transporte",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="grua",
 *          description="grua",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_tipo_material",
 *          description="fk_tipo_material",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Material extends Model
{
    use SoftDeletes;

    public $table = 'materials';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fk_loc',
        'modelo',
        'matricula',
        'transporte',
        'grua',
        'fk_tipo_material'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fk_loc' => 'integer',
        'modelo' => 'string',
        'matricula' => 'string',
        'transporte' => 'string',
        'grua' => 'string',
        'fk_tipo_material' => 'integer'
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
}
