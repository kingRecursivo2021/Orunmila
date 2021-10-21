<?php

use App\Orunmila\Modelo\Personas;

class Directivos extends Personas{
    
    function __construct($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero) {
        super($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero);
    }
}

?>