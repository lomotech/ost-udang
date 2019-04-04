<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class XrefPostcode
 * @package App\Models
 */
class XrefPostcode extends Model
{
    use Cachable;
    use SoftDeletes;
    use HasSlug;
    use LogsActivity;
    protected static $logFillable = true;

    public $table = 'xref_postcodes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'slug',
        'code',
        'name',
        'xref_state_id',
        'xref_district_id',
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
        'code' => 'string',
        'name' => 'string',
        'xref_state_id' => 'integer',
        'xref_district_id' => 'integer',
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
    public function xrefDistrict()
    {
        return $this->belongsTo(XrefDistrict::class);
    }
}
