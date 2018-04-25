<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class XrefDistrict
 * @package App\Models
 */
class XrefDistrict extends Model
{
    use Cachable;
    use SoftDeletes;
    use HasSlug;
    use LogsActivity;
    protected static $logFillable = true;

    public $table = 'xref_districts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'slug',
        'name',
        'ddsa_code',
        'alpha_3',
        'xref_state_id',
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
        'alpha_3' => 'string',
        'xref_state_id' => 'integer',
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
        return $this->belongsTo(XrefState::class);
    }
    public function xrefSubdistrict()
    {
        return $this->hasMany(XrefSubdistrict::class);
    }
}
