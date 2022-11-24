<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredientes extends Model
{
    public string $cantidad_utilizar;
    public string $unidad_medica;

    public function __construct(string $cantidad, string $unidad){
        $this->cantidad_utilizar = $cantidad;
        $this->unidad_medica = $unidad;

    }
}
