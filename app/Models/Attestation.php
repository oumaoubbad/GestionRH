<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Attestation extends Model
{
    use HasFactory , SoftDeletes;
    const STATUT_EN_ATTENTE = 0;
    const STATUT_ACCEPTE = 1;
    const STATUT_REFUSE = 2;


    protected $fillable = [
        'user_id' , 'type' ,'date','statut'
    ];


    protected $casts = [
        'statut' => 'integer',
    ];

}
