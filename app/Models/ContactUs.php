<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'state_id',
        'reviewed_by_id',
        'reviewed_by_reply',
        'strike_out_price',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
