<?php

namespace App\Orunmila\Modelo;
use App\Orunmila\Modelo\Personas;

    class Administrativos extends Personas{
        
        private $puesto;
        
        function __construct($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero) {
            super($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero);
        }
                
        /**
         * @return mixed
         */
        public function getPuesto()
        {
            return $this->puesto;
        }
    
        /**
         * @param mixed $puesto
         */
        public function setPuesto($puesto)
        {
            $this->puesto = $puesto;
        }
        
    }

?>