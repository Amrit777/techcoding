<?php

namespace App\Models;

use App\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'icon_class',
        'image',
        'state_id',
        'created_at',
        'updated_at',
        'created_by_id'
    ];

    public function media()
    {
        return $this->morphOne(Media::class, 'model');
    }

    public function courses()
    {
        return $this->hasMany(Course::class)->with('media');
    }
}
