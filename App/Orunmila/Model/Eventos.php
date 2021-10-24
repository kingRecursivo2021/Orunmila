<?php

class Eventos
{

    private $idEvento;

    private $nombre;

    private $fecha_inicio;

    private $fecha_fin;

    private $descripcion;

    /**
     *
     * @return mixed
     */
    public function __construct()
    {}

    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     *
     * @return mixed
     */
    public function getFecha_inicio()
    {
        return $this->fecha_inicio;
    }

    /**
     *
     * @return mixed
     */
    public function getFecha_fin()
    {
        return $this->fecha_fin;
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
     * @param mixed $idEvento
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;
    }

    /**
     *
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     *
     * @param mixed $fecha_inicio
     */
    public function setFecha_inicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;
    }

    /**
     *
     * @param mixed $fecha_fin
     */
    public function setFecha_fin($fecha_fin)
    {
        $this->fecha_fin = $fecha_fin;
    }

    /**
     *
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}

?>