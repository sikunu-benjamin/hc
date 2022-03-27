<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'budget',
        'budget_appro',
        'date_de_demarage',
        'description',
        'finance',
        'prestation',
        'personnel',
        'phone',
        'permis',
        'nombres_de_pieces',
        'type_de_construction',
        'type_de_maison',
        'terrain',
        'user_id',
        'surfaces',
        'style_de_construction',
        'objectif',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
