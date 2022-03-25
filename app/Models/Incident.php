<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $table = 'incidents';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function cartes_trucades()
    {
        return $this->belongsTo(CartaTrucada::class, 'incidents_id');
    }

    public function tipus_incidents()
    {
        return $this->belongsTo(Tipus_Incident::class, 'id');
    }

}
