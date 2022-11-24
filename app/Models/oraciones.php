<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\palabras;

class oraciones extends Model
{
    private $palabra;

    public function __construct(){
        $this->palabra = new palabras();
    }
}
