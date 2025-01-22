<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formations';
    protected $fillable = ['diplome', 'ecole', 'annee_obtention'];
}
