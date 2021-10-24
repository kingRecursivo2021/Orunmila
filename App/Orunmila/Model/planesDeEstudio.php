<?php

class planesDeEstudio{
    
    private $division;
    private $nivel_academico;
    private $temario;
    
    /**
     * @return mixed
     */
    
    public function __construct() {
        
    }
    
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @return mixed
     */
    public function getNivel_academico()
    {
        return $this->nivel_academico;
    }

    /**
     * @return mixed
     */
    public function getTemario()
    {
        return $this->temario;
    }

    /**
     * @param mixed $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * @param mixed $nivel_academico
     */
    public function setNivel_academico($nivel_academico)
    {
        $this->nivel_academico = $nivel_academico;
    }

    /**
     * @param mixed $temario
     */
    public function setTemario($temario)
    {
        $this->temario = $temario;
    }
    
}

?>