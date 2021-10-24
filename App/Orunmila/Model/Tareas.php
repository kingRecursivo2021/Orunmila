<?php

class Tareas
{

    private $idTarea;

    private $nombreTarea;

    private $descripcion;

    private $fecha_entrega;

    private $esOpcional;

    public function __construct()
    {
        
    }

    /**
     *
     * @return mixed
     */
    public function getIdTarea()
    {
        return $this->idTarea;
    }

    /**
     *
     * @return mixed
     */
    public function getNombreTarea()
    {
        return $this->nombreTarea;
    }

    /**
     *
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     *
     * @return mixed
     */
    public function getFecha_entrega()
    {
        return $this->fecha_entrega;
    }

    /**
     *
     * @return mixed
     */
    public function getEsOpcional()
    {
        return $this->esOpcional;
    }

    /**
     *
     * @param mixed $idTarea
     */
    public function setIdTarea($idTarea)
    {
        $this->idTarea = $idTarea;
    }

    /**
     *
     * @param mixed $nombreTarea
     */
    public function setNombreTarea($nombreTarea)
    {
        $this->nombreTarea = $nombreTarea;
    }

    /**
     *
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     *
     * @param mixed $fecha_entrega
     */
    public function setFecha_entrega($fecha_entrega)
    {
        $this->fecha_entrega = $fecha_entrega;
    }

    /**
     *
     * @param mixed $esOpcional
     */
    public function setEsOpcional($esOpcional)
    {
        $this->esOpcional = $esOpcional;
    }
}

?>