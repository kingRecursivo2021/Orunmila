<?php

$mail = $_POST['mail'];
$contrase�a = $_POST['password'];

session_start();

$_SESSION['mail'] = $mail;

// $db = DBConnection::getConnection();

$db = mysqli_connect("190.228.29.68", "frey", "rkiGCB6cuzC2", "mel_recu");

$consulta = "SELECT * FROM persona WHERE mail='$mail' AND password='$contrase�a'";

$resultado = mysqli_query($db, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    
    header("Location: http://localhost/Orunmila/view/Administrativos.php");
}
else{
    
    ?>

    
    <?php 
}

mysqli_free_result($resultado);
mysqli_close($db);