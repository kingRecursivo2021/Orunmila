<?php
namespace App\Orunmila\Model;
use App\Orunmila\Core\DBConnection;

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
    
    function cargaTareas($idTarea, $nombreTarea, $descripcion, $fecha_entrega, $esOpcional) {
        $this->idTarea = $idTarea;
        $this->nombreTarea = $nombreTarea;
        $this->descripcion = $descripcion;
        $this->fecha_entrega = $fecha_entrega;
        $this->esOpcional = $esOpcional;
        
    }
    
    public function jsonSerialize()
    {
        $parametros = array();
        
        $parametros['idTarea'] = $this->idTarea;
        $parametros['nombreTarea'] = $this->nombreTarea;
        $parametros['descripcion'] = $this->descripcion;
        $parametros['fecha_entrega'] = $this->fecha_entrega;
        $parametros['confirma'] = $this->esOpcional;
        
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
        
        $sql = "INSERT INTO mel_recu.tarea (id_tarea, id_materia, nombre, descrip, fecha, opcional)
         VALUES ('" . $parametros['idTarea'] . "', '" . $parametros[12] . "', '" . $parametros['nombreTarea'] . "', '" . $parametros['descripcion'] . "', '" . $parametros['fecha_entrega'] . "', '" . $parametros['confirma']. "')";
        
        if($db->query($sql)){
            return "funciono";
        }
        
        mysqli_close($db);
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