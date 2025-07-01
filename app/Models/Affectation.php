<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Affectation extends Model
{
    use HasFactory,softDeletes;
    protected $fillable = [
         'conge_id'
    ];

    public function conge(){
        return $this->hasMany(Conge::class);
    }
}
