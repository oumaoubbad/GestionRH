<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'type', 'date_reunions', 'heure_reunions','participants','lien','lieu'];

}
