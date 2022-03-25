<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatAgencia extends Model
{
    use HasFactory;

    protected $table = 'estats_agencies';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function cartes_trucades_has_agencies()
    {
        return $this->hasOne(CartaTrucadaHasAgencias::class, 'estats_agencies_id');
    }


}
