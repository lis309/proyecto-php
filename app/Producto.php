<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;

    //relación entre producto y sus detalles
    public function detalles(){
        return $this->hasMany(Detalle::class);
    }
}
