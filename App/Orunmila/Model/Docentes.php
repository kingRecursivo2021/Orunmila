<?php

namespace App\Orunmila\Modelo;
use App\Orunmila\Modelo\Personas;

class Docentes extends Personas{
 
    function __construct($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero) {
        super($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero);
    }
}

?>