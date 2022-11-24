<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\numero_de_vuelo;
use App\Models\aeropuerto;
class vuelo extends Model
{
    private $num_vuelo;
    private $aeropuertos;
    public function __construct(){
      $this->num_vuelo = new numero_de_vuelo();
    }
    
    public function agregar(aeropuerto $aeropuerto)
    {
        $this->aeropuertos[] = $aeropuerto;
    }
}
