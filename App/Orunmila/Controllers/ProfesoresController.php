<?php
namespace App\Orunmila\Controllers;

include '../Model/Tareas.php';
require_once '../Core/config.php';

use App\Orunmila\Model\Tareas;

$tareas = new Tareas();

$tareas->cargaTareas($_POST['idTarea'], $_POST['nombreTarea'], $_POST['descripcion'], $_POST['fecha_entrega'], $_POST['confirma']);

$tareas->save();

?>

