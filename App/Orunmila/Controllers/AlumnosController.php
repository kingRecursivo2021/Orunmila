<?php

    namespace App\Orunmila\Controllers;
    
    include '../Model/Alumnos.php';
    require_once '../Core/config.php';
    
    use App\Orunmila\Model\Alumnos;
    
   // http://localhost/Orunmila/App/Orunmila/Controllers/AlumnosController.php
   // print_r($_SERVER); 
    
    $alum = new Alumnos();
    $alum->cargaPersonas($_POST['dni'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['direccion'], $_POST['telefono'], $_POST['genero'], 
        $_POST['fechaNacimiento'], $_POST['password'], $_POST['perfil']);
    
//     $alumno = new Alumnos($_POST['dni'], 
//         $_POST['nombre'], $_POST['apellido'], $_POST['email'], 
//         $_POST['direccion'], $_POST['telefono'], $_POST['genero'], 
//         $_POST['fechaNacimiento'], $_POST['password']); 
//     print_r($alumno);
    
    $alum->save();
    
?>