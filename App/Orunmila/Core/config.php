<?php
namespace www\App\Core;

require_once '/home/martinsa/public_html/autoload.php';

session_start();
/*
 *
 */
DBConnection::setDbHost("localhost");
DBConnection::setDbUser("martinsa_user_sub_online");
DBConnection::setDbPass("uqZ1dyV#Zd]q");
DBConnection::setDbName("martinsa_subastas_online");
DBConnection::setCharset("utf8");
DBConnection::setDebug(FALSE);
DBConnection::setDieOnError(FALSE);
DBConnection::setMostrarErrores(FALSE);