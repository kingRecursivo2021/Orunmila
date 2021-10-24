<?php

namespace App\Orunmila\Model;

    class Administrativos extends Personas{
        
        private $puesto;
        
        function __construct($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero, $fecha_nacimiento, $password) {
            super($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero, $fecha_nacimiento, $password);
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