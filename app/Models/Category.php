<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'image',
    ];

    public function packages()
    {
        return $this->hasMany(Package::class)->latest();
    }
}
