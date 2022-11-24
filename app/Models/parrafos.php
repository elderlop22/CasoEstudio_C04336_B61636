<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oraciones;

class parrafos extends Model
{
    private $oracion;

    public function __construct(){
        $this->oracion = new oraciones();
    }
}
