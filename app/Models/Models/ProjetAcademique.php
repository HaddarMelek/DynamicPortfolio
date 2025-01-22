<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetAcademique extends Model
{
    protected $table = 'projets_academiques';
    protected $fillable = ['titre', 'description'];
}
