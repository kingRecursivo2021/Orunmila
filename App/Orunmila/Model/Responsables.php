<?php

namespace App\Orunmila\Modelo;
use App\Orunmila\Modelo\Personas;

    class Responsables extends Personas{
        
        function __construct($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero) {
            super($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero);
        }
        
    }

?>