<?php

namespace App\Models;

use App\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'overview',
        'session',
        'price',
        'price_per_session',
        'strike_out_price',
        'state_id',
        'createdby_id',
        'created_at',
        'updated_at',
        'instructor_id',
        'keywords',
        'instruction_level_id'
    ];

    public function media()
    {
        return $this->morphOne(Media::class, 'model');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
