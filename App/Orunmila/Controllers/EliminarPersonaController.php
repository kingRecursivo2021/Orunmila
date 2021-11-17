<?php

use App\Orunmila\Model\Personas;
require_once '../Core/config.php';
include '../Model/Personas.php';

$persona = new Personas();

$persona->baja($_POST['dni']);

?>