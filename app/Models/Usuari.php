<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    protected $table = 'usuaris';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function provincies()
    {
        return $this->belongsTo(Perfil::class, 'id');
    }

    public function carta_trucades()
    {
        return $this->hasMany(CartaTrucada::class, 'usuaris_id');
    }


}
