<?php
session_start();

if (array_key_exists("mail", $_SESSION) && $_SESSION['mail']!=null && array_key_exists("categoria", $_SESSION) && $_SESSION['categoria']==2) {
  
}
else{
    header("Location: http://localhost/Seminario/App/Index.php");
}
?>

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../public/inc/css/estylo.css" />
<head>
<meta charset="ISO-8859-1">
<title>Orunmila Profesores</title>
</head>
<body>

<?php 
	include "navBarProfe.php";
?>

<div class="<?=($_GET['pantalla']==1 && $_GET['accion']==1?"mostrar":"ocultar")?>">

	<form method="POST" name="altaTarea" action="../App/Orunmila/Controllers/ProfesoresController.php"> 
	
	<div class="form-element">
	    <h3>Alta de Tarea</h3>
	    </div>
	    <div class="form-element">
	        <label>idTarea</label>
	        <input type="number" name="idTarea" required />
	    </div>
	    <div class="form-element">
	        <label>Nombre Tarea</label>
	        <input type="text" name="nombreTarea" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Descripcion</label>
	        <input type="text" name="descripcion" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Fecha de entrega</label>
	        <input type="date" name="fecha_entrega" required />
	    </div>
	    
	    <p>Seleccione si la tarea es opcional:</p>

        <div>
          <input type="radio" id="si" name="confirma" value="si"
                 checked>
          <label for="si">Si</label>
        </div>

        <div>
          <input type="radio" id="no" name="confirma" value="no">
          <label for="no">No</label>
    	</div>
	    
	    <button class ="btn btn-primary" type="submit" name="ingresar" value="login">Registrar</button>
	    
	</form>

</div>

<br>

<div class="<?=($_GET['pantalla']==1 && $_GET['accion']==2?"mostrar":"ocultar")?>">
	<form action="../App/Orunmila/Controllers/ProfesoresController.php" method="POST" name="modificarAlumnos">
		<div>
			<h3>Modificar Tarea</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-primary">Modificar</button>
		</div>
	</form>
</div>

<br>

<div class="<?=($_GET['pantalla']==1 && $_GET['accion']==3?"mostrar":"ocultar")?>" >
	<form action="../App/Orunmila/Controllers/ProfesoresController.php" method="POST" name="bajapersona">
		<div>
			<h3>Baja de Tarea</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="submit" class="btn btn-danger">Realizar baja</button>
		</div>
	</form>
</div>

<div class="<?=($_GET['pantalla']==2 && $_GET['accion']==1?"mostrar":"ocultar")?>">

	<form method="POST" name="altaExamen" action="../App/Orunmila/Controllers/ProfesoresController.php"> 
	
	<div class="form-element">
	    <h3>Alta de Examen</h3>
	    </div>
	    <div class="form-element">
	        <label>Codigo de Examen</label>
	        <input type="number" name="idExamen" required />
	    </div>
	    <div class="form-element">
	        <label>Nombre Examen</label>
	        <input type="text" name="nombreExamen" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Descripcion</label>
	        <input type="text" name="descripcion" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Fecha de entrega</label>
	        <input type="date" name="fecha_entrega" required />
	    </div>
	    
	    <button class ="btn btn-primary" type="submit" name="ingresar" value="login">Registrar</button>
	    
	</form>

</div>

<div class="<?=($_GET['pantalla']==2 && $_GET['accion']==2?"mostrar":"ocultar")?>">
	<form action="../App/Orunmila/Controllers/ProfesoresController.php" method="POST" name="modificarAlumnos">
		<div>
			<h3>Modificar Examen</h3>
			<label>Ingresar codigo de examen</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-primary">Modificar</button>
		</div>
	</form>
</div>

<br>

<div class="<?=($_GET['pantalla']==2 && $_GET['accion']==3?"mostrar":"ocultar")?>" >
	<form action="../App/Orunmila/Controllers/ProfesoresController.php" method="POST" name="bajapersona">
		<div>
			<h3>Baja de Examen</h3>
			<label>Ingresar codigo de examen</label>
			<input type ="search" name = "dni" required>
			<button type="submit" class="btn btn-danger">Realizar baja</button>
		</div>
	</form>
</div>

</body>
</html>