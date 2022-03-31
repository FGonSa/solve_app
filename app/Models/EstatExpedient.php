<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatExpedient extends Model
{
    use HasFactory;

    protected $table = 'estats_expedients';
    //Por defecto ya vienen estos valores
    // protected $primary_key = 'id';
    // public $incrementing = true;
    public $timestamps = false;//debemos indicar a Eloquent que no tenemos timestamps

    public function expedients()
    {
        return $this->hasMany(Expedient::class, 'estats_expedients_id');
    }
}
