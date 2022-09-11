<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fieul extends Model
{
    use HasFactory;
    protected $fillable  = [
        "id",
        "date_naissance",
        "nom",
        "prenom",
        "telephone",
        "pass",
     
    ];
}
