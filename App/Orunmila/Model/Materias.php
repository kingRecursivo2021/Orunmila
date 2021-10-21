<?php
namespace App\Orunmila\Modelo;

/*
 * id
 * nombre
 * horario
 * carga horaria
 * programa
 * obj tarea
 * obj examen
 * obj asistencia
 * obj evento
 */
class Materias
{

    private $id;

    private $nombre;

    private $horario;

    private $cargaHoraria;

    private $programa;

    public function __construct($id, $nombre, $horario, $cargaHoraria, $programa) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->horario = $horario;
        $this->cargaHoraria = $cargaHoraria;
        $this->programa = $programa;
    }
    
    /**
     *
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     *
     * @return mixed
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     *
     * @return mixed
     */
    public function getHorario(): int
    {
        return $this->horario;
    }

    /**
     *
     * @return mixed
     */
    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }

    /**
     *
     * @return mixed
     */
    public function getPrograma(): string
    {
        return $this->programa;
    }

    /**
     *
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     *
     * @param mixed $nombre
     */
    public function setNombre($nombre): string
    {
        $this->nombre = $nombre;
    }

    /**
     *
     * @param mixed $horario
     */
    public function setHorario($horario): void
    {
        $this->horario = $horario;
    }

    /**
     *
     * @param mixed $cargaHoraria
     */
    public function setCargaHoraria($cargaHoraria): void
    {
        $this->cargaHoraria = $cargaHoraria;
    }

    /**
     *
     * @param mixed $programa
     */
    public function setPrograma($programa): void
    {
        $this->programa = $programa;
    }
}
?>