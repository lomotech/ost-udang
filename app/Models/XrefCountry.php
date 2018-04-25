<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class XrefCountry
 * @package App\Models
 */
class XrefCountry extends Model
{
    use Cachable;
    use SoftDeletes;
    use HasSlug;
    use LogsActivity;
    protected static $logFillable = true;

    public $table = 'xref_countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'slug',
        'name',
        'ddsa_code',
        'alpha_2',
        'alpha_3',
        'olympic',
        'fifa',
        'currency_name',
        'currency_alpha',
        'currency_minor_decimal',
        'capital',
        'nationality',
        'latitude',
        'longitude',
        'active_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'name' => 'string',
        'ddsa_code' => 'string',
        'alpha_2' => 'string',
        'alpha_3' => 'string',
        'olympic' => 'string',
        'fifa' => 'string',
        'currency_name' => 'string',
        'currency_alpha' => 'string',
        'currency_minor_decimal' => 'boolean',
        'capital' => 'string',
        'nationality' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'active_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Slug option setting
     * @return SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Relationship
     */
    public function xrefState()
    {
        return $this->hasMany(XrefState::class);
    }
}
