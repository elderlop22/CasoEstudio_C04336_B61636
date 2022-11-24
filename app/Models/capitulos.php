<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\parrafos;

class capitulos extends Model
{
    private $parrafo;

    public function __construct(){
        $this->parrafo = new parrafos();
    }
}
