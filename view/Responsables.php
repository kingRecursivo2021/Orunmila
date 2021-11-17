<?php
session_start();

if (array_key_exists("mail", $_SESSION) && $_SESSION['mail']!=null && array_key_exists("categoria", $_SESSION) && $_SESSION['categoria']==4) {
  
}
else{
    header("Location: http://localhost/Seminario/App/Index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<h1>Pagina de responsables</h1>
</body>
</html>