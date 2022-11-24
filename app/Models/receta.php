<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ingredientes;
class receta extends Model
{
    public string $titulo;
    public int $porciones;
    public string $instrucciones;
    public $ingrediente = [];

    public function __construct(string $titulo, int $porcion, string $instruccion){
        $this->titulo = $titulo;
        $this->porciones = $porcion;
        $this->instrucciones = $instruccion;
    }
    public function agregar_ingrediente(ingredientes $ingrediente)
    {
        $this->ingredientes[] = $ingrediente;
    }
}
