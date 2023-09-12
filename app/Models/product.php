<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    // protected $guarded=[];

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'price',
        'count',
        'made_in',
        // 'offer',
        'categories_id'
    ];
}
