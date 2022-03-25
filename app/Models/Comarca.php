<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comarca extends Model
{
    use HasFactory;

    protected $table = 'comarques';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function provincies()
    {
        return $this->belongsTo(Provincia::class, 'id');
    }

    public function municipis()
    {
        return $this->hasMany(Municipio::class, 'comarques_id');
    }


}
