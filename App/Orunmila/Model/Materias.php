<?php
namespace App\Orunmila\Model;

class Materias
{

    private $id;

    private $nombre;

    private $horario;

    private $cargaHoraria;

    private $programa;
    
    private $esExtraCurricular;
    
    private $plan_de_estudio;
    
    private $tareas = Array();
    
    private $examenes = Array();
    
    private $eventos = Array();
    
    
    public function __construct() {

    }

    /**
     * @return mixed
     */
    public function getEsExtraCurricular()
    {
        return $this->esExtraCurricular;
    }

    /**
     * @return mixed
     */
    public function getPlan_de_estudio()
    {
        return $this->plan_de_estudio;
    }

    /**
     * @param mixed $esExtraCurricular
     */
    public function setEsExtraCurricular($esExtraCurricular)
    {
        $this->esExtraCurricular = $esExtraCurricular;
    }

    /**
     * @param mixed $plan_de_estudio
     */
    public function setPlan_de_estudio($plan_de_estudio)
    {
        $this->plan_de_estudio = $plan_de_estudio;
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
    
    function cargaMaterias($id, $nombre, $horario, $cargaHoraria, $programa, $esExtraCurricular) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->horario = $horario;
        $this->cargaHoraria = $cargaHoraria;
        $this->programa = $programa;
        $this->esExtraCurricular = $esExtraCurricular;
    }
    
}
?>