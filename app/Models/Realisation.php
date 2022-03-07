<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thunmail',
        'image',
        'categories',
        'desc_content_1',
        'desc_content_2',
        'slug',
    ];
}
