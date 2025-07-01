<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Conge extends Model
{



    use HasFactory , SoftDeletes;
    const STATUT_EN_ATTENTE = 0;
    const STATUT_ACCEPTE = 1;
    const STATUT_REFUSE = 2;


    protected $fillable = [
        'user_id' , 'type' ,'date_debut','statut' ,'date_fin','duree'
    ];

    protected $casts = [
        'statut' => 'integer',
    ];


    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
