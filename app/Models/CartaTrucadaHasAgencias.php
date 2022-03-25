<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaTrucadaHasAgencias extends Model
{
    use HasFactory;

    protected $table = 'cartes_trucades_has_agencies';
    //Por defecto ya vienen estos valores
    protected $primary_key = ['cartes_trucades_id, agencies_id, estats_agencies_id'];
    public $incrementing = false;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function agencies()
    {
        return $this->belongsTo(Agencia::class, 'id');
    }

    public function cartes_trucades()
    {
        return $this->belongsTo(CartaTrucada::class, 'cartes_trucades_id');
    }

    public function estat_agencies()
    {
        return $this->belongsTo(EstatAgencia::class, 'id');
    }
}
