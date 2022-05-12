<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Package extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'thumb',
        'price',
        'content',
        'category_id',
    ];
    protected $appends = [ 'thumb_url' ];

    public function getThumbUrlAttribute()
    {
        return Storage::url($this->attributes['thumb']);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
