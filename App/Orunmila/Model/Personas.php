<?php
namespace App\Orunmila\Model;

use App\Orunmila\Core\DBConnection;

abstract class Personas
{

    private $dni;

    private $nombre;

    private $apellido;

    private $mail;

    private $direccion;

    private $telefono;

    private $genero;
    
    private $fecha_nacimiento;
    
    private $password;

    /**
     * @return mixed
     */

    public function __construct()
    {

    }
    
    public function cargaPersonas($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero, $fecha_nacimiento, $password) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->mail = $mail;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->genero = $genero;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->password = $password;
    }
    
    
    public function getFecha_nacimiennto()
    {
        return $this->fecha_nacimiennto;
    }

    public function setFecha_nacimiennto($fecha_nacimiennto)
    {
        $this->fecha_nacimiennto = $fecha_nacimiennto;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero($genero): void
    {
        $this->genero = $genero;
    }

    public function getDni(): int
    {
        return $this->dni;
    }

    public function setDni($dni): void
    {
        $this->dni = $dni;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    public function getTelefono(): int
    {
        return $this->telefono;
    }

    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }
    
    public function save() {

            $db = DBConnection::getConnection();
            
            $sql = "INSERT INTO mel_recu.alumno (dni, nombre, apellido, mail, direccion, telefono, genero, fecha_nacimiento, password ) VALUES (:dni, :nombre, :apellido, :mail, :direccion, :telefono, :genero, :fecha_nacimiento, :password)";
            
            $parametros = array();
            $parametros = $this->jsonSerialize();
            
            if ($db->query($sql, true, $parametros)) {
                return true;
            } else {
                return false;
            }
        
    }
    
    public function jsonSerialize()
    {
        $parametros = array();
        
        $parametros['nombre'] = $this->nombre;
        $parametros['apellido'] = $this->apellido;
        $parametros['mail'] = $this->mail;
        $parametros['dni'] = $this->dni;
        $parametros['direccion'] = $this->direccion;
        $parametros['genero'] = $this->genero;
        $parametros['fecha_nacimiento'] = $this->fecha_nacimiento;
        $parametros['password'] = $this->password;
        
        return $parametros;
    }
}
?>