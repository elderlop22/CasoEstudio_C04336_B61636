<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\capitulos;

class libros extends Model
{
    private $capitulos;
    public function __construct(){
    }

    public function agregar(capitulos $capitulo)
    {
        $this->capitulos[] =  $capitulo;
    }
}
