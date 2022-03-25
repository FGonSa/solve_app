<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipis';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function comarques()
    {
        return $this->belongsTo(Comarca::class, 'id');
    }

    public function agencies()
    {
        return $this->hasMany(Agencia::class, 'municipis_id');
    }

    public function carta_trucades()
    {
        return $this->hasMany(CartaTrucada::class, 'municipis_id');
    }

}
