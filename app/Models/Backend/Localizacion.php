<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Localizacion",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="lid",
 *          description="lid",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="municipio",
 *          description="municipio",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nucleo",
 *          description="nucleo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="calle",
 *          description="calle",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="numero",
 *          description="numero",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="piso",
 *          description="piso",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="escalaera",
 *          description="escalaera",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cp",
 *          description="cp",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="longitude",
 *          description="longitude",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="latitude",
 *          description="latitude",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Localizacion extends Model
{
    use SoftDeletes;

    public $table = 'localizacions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'lid',
        'municipio',
        'nucleo',
        'calle',
        'numero',
        'piso',
        'escalaera',
        'cp',
        'longitude',
        'latitude'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lid' => 'integer',
        'municipio' => 'string',
        'nucleo' => 'string',
        'calle' => 'string',
        'numero' => 'integer',
        'piso' => 'string',
        'escalaera' => 'string',
        'cp' => 'string',
        'longitude' => 'integer',
        'latitude' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function entidads()
    {
        return $this->hasMany(\App\Models\Backend\Entidad::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function materials()
    {
        return $this->hasMany(\App\Models\Backend\Material::class);
    }
}
