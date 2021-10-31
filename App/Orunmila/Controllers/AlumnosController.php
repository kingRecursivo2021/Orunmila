<?php

    namespace App\Orunmila\Controllers;
    
    use App\Orunmila\Model\Alumnos;
                
    require_once '/App/Orunmila/Core/config.php';
        
    $alumno = new Alumnos($_POST["dni"], 
        $_POST["nombre"], $_POST["apellido"], $_POST["email"], 
        $_POST["direccion"], $_POST["telefono"], $_POST["genero"], 
        $_POST["fechaNacimiento"], $_POST["password"]);
    
    $alumno->save();
    
?>