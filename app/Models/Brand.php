<?php

namespace App\Models;

use App\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'link_to',
        'link_title',
        'image',
        'state_id',
        'created_at',
        'updated_at',
        'createdby_id',
        'deleted_at'
    ];

    public function media()
    {
        return $this->morphOne(Media::class, 'model');
    }
}
