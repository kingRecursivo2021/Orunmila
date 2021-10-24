<?php

namespace App\Orunmila\Model;

class Docentes extends Personas{
    
    private $materia;
 
    /**
     * @return mixed
     */
    
    function __construct() {
        
    }    
    
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * @param mixed $materia
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;
    }   
    
}

?>