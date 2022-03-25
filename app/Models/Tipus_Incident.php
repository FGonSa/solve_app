<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus_Incident extends Model
{
    use HasFactory;

    protected $table = 'tipus_incidents';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps


    public function incidents()
    {
        return $this->hasMany(Incident::class, 'classes_incidents_id');
    }


}
