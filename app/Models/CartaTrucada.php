<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaTrucada extends Model
{
    use HasFactory;

    protected $table = 'cartes_trucades';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function incidents()
    {
        return $this->belongsTo(Incident::class, 'id');
    }

    public function provincies()
    {
        return $this->belongsTo(Provincia::class, 'id');
    }

    public function municipis()
    {
        return $this->belongsTo(Municipi::class, 'id');
    }

    public function dades_personals()
    {
        return $this->belongsTo(Dada_Personal::class, 'id');
    }

    public function usuaris()
    {
        return $this->belongsTo(Usuari::class, 'id');
    }

    public function tipus_localitzacions()
    {
        return $this->belongsTo(Tipus_Localitzacio::class, 'id');
    }

    public function expedients()
    {
        return $this->belongsTo(Expedient::class, 'id');
    }

    public function cartes_trucades_has_agencies(){
        return $this->hasMany(CartaTrucadaHasAgencia::class, 'cartes_trucades_id');
    }
}
