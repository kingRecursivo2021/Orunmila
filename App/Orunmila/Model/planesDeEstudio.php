<?php

class planesDeEstudio{
    
    private $id;    
    private $division;
    private $nivel_academico;
    
    /**
     * @return mixed
     */
    
    public function __construct() {
        
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getDivision()
    {
        return $this->division;
    }

    public function getNivel_academico()
    {
        return $this->nivel_academico;
    }

    public function setNivel_academico($nivel_academico)
    {
        $this->nivel_academico = $nivel_academico;
    }

    public function setDivision($division)
    {
        $this->division = $division;
    }

}

?>