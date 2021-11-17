<?php
namespace App\Orunmila\Model;

use App\Orunmila\Core\DBConnection;

class Personas
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
    
    private $perfil;

    public function __construct()
    {}

    public function cargaPersonas($dni, $nombre, $apellido, $mail, $direccion, $telefono, $genero, $fecha_nacimiento, $password, $perfil)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->mail = $mail;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->genero = $genero;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->password = $password;
        $this->perfil = $perfil;
        
    }
    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param mixed $perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    /**
     *
     * @return mixed
     */

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

       
    public function save()
    {

        $db = DBConnection::getConnection();
        
        //$db = mysqli_connect("190.228.29.68", "frey", "rkiGCB6cuzC2", "mel_recu");

        if (mysqli_connect_errno()) {
            printf("Fall� la conexi�n: %s\n", mysqli_connect_error());
            exit();
        }

        $parametros = $this->jsonSerialize();
        
       // print_r($parametros);

//         $sql = "INSERT INTO mel_recu.persona (dni, nombre, apellido, mail, direccion, telefono, genero, fecha_nac, password ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
//         print_r($parametros);
//         if($db->query($sql, TRUE, $parametros)){
//             return "funciono";       
//         }

         $sql = "INSERT INTO mel_recu.persona (dni, nombre, apellido, mail, direccion, telefono, genero, fecha_nac, password, perfil )
         VALUES ('" . $parametros['dni'] . "', '" . $parametros['nombre'] . "', '" . 
         $parametros['apellido'] . "', '" . $parametros['mail'] . "', '" . 
         $parametros['direccion'] . "', '" . $parametros['telefono'] . "', '" . 
         $parametros['genero'] . "', '" . $parametros['fecha_nacimiento'] . "', '" . 
         $parametros['password'] . "'  , '" . $parametros['perfil'] . "')";
      
         if($db->query($sql)){
                    return "funciono";
         }
        
//         if (mysqli_query($db, $sql) === TRUE) {
//             printf("Se inserto con éxtio en la tabla person.\n");
//         }

//         // $stm = $db->stmt_init();
//         // $stm->prepare($sql);

//         // $parametros = array();

//         // $stm->bind_param("sssssssss", $parametros['dni'], $parametros['nombre'], $parametros['apellido'], $parametros['mail'], $parametros['direccion'], $parametros['telefono'], $parametros['genero'], $parametros['fecha_nacimiento'], $parametros['password']);

//         // if ($stm->execute()) {
//         // return true;
//         // } else {
//         // return false;
//         // }

//         // $sentencia = mysqli_stmt_init($db);
//         // if (mysqli_stmt_prepare($sentencia, $sql)) {

//         // /* vincular los par�metros para los marcadores */
//         // mysqli_stmt_bind_param($sentencia, "sssssssss", $parametros['dni'], $parametros['nombre'], $parametros['apellido'], $parametros['mail'], $parametros['direccion'], $parametros['telefono'], $parametros['genero'], $parametros['fecha_nacimiento'], $parametros['password']);

//         // /* ejecutar la consulta */
//         // if (mysqli_stmt_execute($sentencia)) {
//         // print_r("true");
//         // return true;
//         // } else {
//         // print_r("false");
//         // return false;
//         // }
//         // // /* vincular las variables de resultados */
//         // // mysqli_stmt_bind_result($sentencia, $distrito);

//         // // /* obtener el valor */
//         // // mysqli_stmt_fetch($sentencia);

//         // // printf("%s est� en el distrito de %s\n", $ciudad, $distrito);

//         // /* cerrar la sentencia */
//         // mysqli_stmt_close($sentencia);
//         // }

//         // else{
//         // print_r("llorar");
//         // }

//         /* cerrar la conexi�n */
        mysqli_close($db);
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
        $parametros['telefono'] = $this->telefono;
        $parametros['perfil'] = $this->perfil;

        return $parametros;
    }
    
    public function jsonSerialize2()
    {
        $parametros=null;
       
        $parametros['dni'] = $this->dni;   
        return $parametros;
    }
    
    public function baja($dni) {
        $db = DBConnection::getConnection();

        $sql = "UPDATE mel_recu.persona set activo = 0 WHERE dni = '$dni'";
        
        if($db->query($sql)){
            return "funciono";
        }
        
        mysqli_close($db);
    }
}
?>