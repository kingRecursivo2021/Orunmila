<?php
namespace App\Orunmila\Core;

include 'DBConnection.php';

require_once 'App/Orunmila/Core/autoload.php';

session_start();
/*
 *
 */

// configuracion de la BD

DBConnection::setDbHost("190.228.29.68");
DBConnection::setDbUser("frey");
DBConnection::setDbPass("rkiGCB6cuzC2");
DBConnection::setDbName("mel_recu");
DBConnection::setCharset("utf8");
DBConnection::setDebug(TRUE);
DBConnection::setDieOnError(TRUE);
DBConnection::setMostrarErrores(TRUE);