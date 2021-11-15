<?php
namespace App\Orunmila\Model;

use App\Orunmila\Core\DBConnection;

class Materias
{

    private $id;

    private $nombre;

    private $horario;

    private $cargaHoraria;

    private $programa;
    
    private $esExtraCurricular;
    
    private $tareas = Array();
    
    private $examenes = Array();
    
    private $eventos = Array();
    
    private $asistencia = Array();
    
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

    /**
     * @param mixed $esExtraCurricular
     */
    public function setEsExtraCurricular($esExtraCurricular)
    {
        $this->esExtraCurricular = $esExtraCurricular;
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
    
    public function jsonSerialize()
    {
        $parametros = array();
        
        $parametros['codigoMateria'] = $this->id;
        $parametros['nombreMateria'] = $this->nombre;
        $parametros['horario'] = $this->horario;
        $parametros['cargaHoras'] = $this->cargaHoraria;
        $parametros['programa'] = $this->programa;
        $parametros['confirma'] = $this->esExtraCurricular;
        
        return $parametros;
    }
    
    public function save()
    {
        $db = DBConnection::getConnection();
        
        if (mysqli_connect_errno()) {
            printf("Fall� la conexi�n: %s\n", mysqli_connect_error());
            exit();
        }
        
        $parametros = $this->jsonSerialize();
        
        $sql = "INSERT INTO mel_recu.materia (id_materia, nombre, horario, carga_horaria, programa, extra_curricular)
         VALUES ('" . $parametros['codigoMateria'] . "', '" . $parametros['nombreMateria'] . "', '" . $parametros['horario'] . "', '" . $parametros['cargaHoras'] . "', '" . $parametros['programa'] . "', '" . $parametros['confirma']. "')";
        
        if($db->query($sql)){
            return "funciono";
        }
        
        mysqli_close($db);
    }
    
}
?>