<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\vuelo;

class aviones extends Model
{
    private $vuelos;
    
    public function __construct()
    {
    }
  
    public function agregar(vuelo $vuelo)
    {
        $this->vuelos[] =  $vuelo;
    }
}
