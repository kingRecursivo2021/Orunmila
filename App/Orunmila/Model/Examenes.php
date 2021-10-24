<?php

class Examenes {
    
    private $idExamen;
    
    private $nombreExamen;
    
    private $descripcion;
    
    private $fecha_examen;
    /**
     * @return mixed
     */
    
    public function __construct() {
        
    }
    
    public function getIdExamen()
    {
        return $this->idExamen;
    }

    /**
     * @return mixed
     */
    public function getNombreExamen()
    {
        return $this->nombreExamen;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getFecha_examen()
    {
        return $this->fecha_examen;
    }

    /**
     * @param mixed $idExamen
     */
    public function setIdExamen($idExamen)
    {
        $this->idExamen = $idExamen;
    }

    /**
     * @param mixed $nombreExamen
     */
    public function setNombreExamen($nombreExamen)
    {
        $this->nombreExamen = $nombreExamen;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @param mixed $fecha_examen
     */
    public function setFecha_examen($fecha_examen)
    {
        $this->fecha_examen = $fecha_examen;
    }

    
    
    
}

?>