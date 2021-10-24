<?php

namespace App\Orunmila\Model;

class Alumnos extends Personas{
    
    private $responsable;
    private $asistencia = Array();
    private $materias = Array();
    
    /**
     * @return multitype:
     */
    
    public function __construct(){
        
    }
    
    public function getMaterias()
    {
        return $this->materias;
    }

    /**
     * @param multitype: $materias
     */
    public function setMaterias($materias)
    {
        $this->materias = $materias;
    }

    /**
     * @return multitype:
     */
    
    public function getAsistencia()
    {
        return $this->asistencia;
    }

    /**
     * @param multitype: $asistencia
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;
    }

    /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @param mixed $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    } 
    
}

?>