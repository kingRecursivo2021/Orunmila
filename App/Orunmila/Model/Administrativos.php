<?php
namespace App\Orunmila\Modelo;

class Administrativos
{

    public $dni;

    public $nombre;

    public $apellido;

    public $mail;

    public $direccion;

    public $telefono;

    public $genero;

    function __construct($dni)
    {
        $this->dni = $dni; // ser� asi??
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
}
?>