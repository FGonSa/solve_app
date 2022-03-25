<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;

    protected $table = 'agencies';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function municipis()
    {
        return $this->belongsTo(Municipio::class, 'id');
    }

    public function cartes_trucades_has_agencies()
    {
        return $this->hasMany(CartaTrucadaHasAgencias::class, 'agencies_id');
    }


}
