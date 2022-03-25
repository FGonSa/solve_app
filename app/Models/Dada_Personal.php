<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dada_Personal extends Model
{
    use HasFactory;

    protected $table = 'dades_personals';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function cartes_trucades()
    {
        return $this->hasMany(CartaTrucada::class, 'dades_personals_id');
    }


}
