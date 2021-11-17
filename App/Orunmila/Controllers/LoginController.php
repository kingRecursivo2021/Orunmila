<?php

if (!function_exists('is_session_started')) {
    
    //
    function is_session_started()
    {
        if (php_sapi_name() !== 'cli') // Devuelve el tipo de interfaz que hay entre PHP y el servidor
        {
            if (version_compare(phpversion(), '5.4.0', '>=')) // Comparamos la vercion de php
            {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }
}

$mail = $_POST['mail'];
$contraseña = $_POST['password'];

if (is_session_started() === FALSE) {
    
    session_start();
}

//$db = DBConnection::getConnection();

$db = mysqli_connect("190.228.29.68", "frey", "rkiGCB6cuzC2", "mel_recu");

//$consulta = "SELECT * FROM persona WHERE mail='$mail' AND password='$contraseña'";

$administrativo = "SELECT * FROM persona WHERE mail='$mail' AND password='$contraseña' AND perfil='administrativo' AND activo='1' ";
$profesor = "SELECT * FROM persona WHERE mail='$mail' AND password='$contraseña' AND perfil='profesor' AND activo='1'";
$alumno = "SELECT * FROM persona WHERE mail='$mail' AND password='$contraseña' AND perfil='alumno' AND activo='1'";
$responsable = "SELECT * FROM persona WHERE mail='$mail' AND password='$contraseña' AND perfil='responsable' AND activo='1'";

$resultado = mysqli_query($db, $administrativo);
$filas = mysqli_num_rows($resultado);

$resultado2 = mysqli_query($db, $profesor);
$filas2 = mysqli_num_rows($resultado2);

$resultado3 = mysqli_query($db, $alumno);
$filas3 = mysqli_num_rows($resultado3);

$resultado4 = mysqli_query($db, $responsable);
$filas4 = mysqli_num_rows($resultado4);

if($filas){
    $_SESSION['mail'] = $mail;
    $_SESSION['categoria'] = 1;
    header("Location: http://localhost/Seminario/view/Administrativos.php");
}
else if ($filas2) {
    $_SESSION['mail'] = $mail;
    $_SESSION['categoria'] = 2;
    header("Location: http://localhost/Seminario/view/Profesores.php");
}
else if ($filas3) {
    $_SESSION['mail'] = $mail;
    $_SESSION['categoria'] = 3;
    header("Location: http://localhost/Seminario/view/alumnos.php");
}
else if ($filas4) {
    $_SESSION['mail'] = $mail;
    $_SESSION['categoria'] = 4;
    header("Location: http://localhost/Seminario/view/Responsables.php");
}

else {
    echo "Error mail o contaseña invalido";
}

mysqli_free_result($resultado);
mysqli_close($db);