<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincies';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function comarques()
    {
        return $this->hasMany(Incident::class, 'provincies_id');
    }

    public function cartes_trucades()
    {
        return $this->hasMany(Incident::class, 'provincies_id');
    }


}
