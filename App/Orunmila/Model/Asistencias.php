<?php
namespace App\Orunmila\Model;

class Asistencias
{

    private $idAsistencia;

    private $fecha_asistencia;

    private $asistio;

    public function __construct()
    {}

    /**
     *
     * @return mixed
     */
    public function getIdAsistencia()
    {
        return $this->idAsistencia;
    }

    /**
     *
     * @return mixed
     */
    public function getFecha_asistencia()
    {
        return $this->fecha_asistencia;
    }

    /**
     *
     * @return mixed
     */
    public function getAsistio()
    {
        return $this->asistio;
    }

    /**
     *
     * @param mixed $idAsistencia
     */
    public function setIdAsistencia($idAsistencia)
    {
        $this->idAsistencia = $idAsistencia;
    }

    /**
     *
     * @param mixed $fecha_asistencia
     */
    public function setFecha_asistencia($fecha_asistencia)
    {
        $this->fecha_asistencia = $fecha_asistencia;
    }

    /**
     *
     * @param mixed $asistio
     */
    public function setAsistio($asistio)
    {
        $this->asistio = $asistio;
    }
}

?>