<?php
session_start();
if (array_key_exists("mail", $_SESSION) && $_SESSION['mail']!=null) {
    $_SESSION=null;
    header("Location: http://localhost/Seminario/view/Login.php");
}