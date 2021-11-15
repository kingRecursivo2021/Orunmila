<?php

namespace App\Orunmila\Controllers;

include '../Model/Materias.php';
require_once '../Core/config.php';

use App\Orunmila\Model\Materias;

$materias = new Materias();

$materias->cargaMaterias($_POST['codigoMateria'], $_POST['nombreMateria'],
    $_POST['horario'], $_POST['cargaHoras'], $_POST['programa'], $_POST['confirma']);

$materias->save();

?>