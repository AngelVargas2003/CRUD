<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    protected $table='viajes';
    protected $primaryKey='id_viajes';
    public $timestamps=false;
    protected $fillable=['id_viajes','fecha','id_destino'];
    use HasFactory;
}
