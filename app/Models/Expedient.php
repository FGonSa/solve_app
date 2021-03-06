<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedient extends Model
{
    use HasFactory;

    protected $table = 'expedients';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function estats_expedients()
    {
        return $this->belongsTo(EstatExpedient::class, 'id');
    }

    public function cartes_trucades()
    {
        return $this->hasMany(CartaTrucada::class, 'expedients_id');
    }
}
