<?php
session_start();

if (array_key_exists("mail", $_SESSION) && $_SESSION['mail']!=null && array_key_exists("categoria", $_SESSION) && $_SESSION['categoria']==1) {
  
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
<title>Insert title here</title>
</head>

<body>

<?php 
	include "navBar.php";
?>

<h1>Administrativos Screen</h1>

<div class="<?=($_GET['pantalla']==1 && $_GET['accion']==1?"mostrar":"ocultar")?>">

	<form method="POST" action="../App/Orunmila/Controllers/AlumnosController.php" name="altaAlumnos" >
    <div class="form-element">
    <h3>Alta de persona</h3>
    </div>
    <div class="form-element">
        <label>Nombre</label>
        <input type="text" name="nombre" required />
    </div>
    <div class="form-element">
        <label>Apellido</label>
        <input type="text" name="apellido" required />
    </div>
    
     <div class="form-element">
        <label>Dni</label>
        <input type="number" name="dni" required />
    </div>
    
     <div class="form-element">
        <label>Genero</label>
        <input type="text" name="genero" required />
    </div>

	  <div class="form-element">
        <label>Fecha de nacimiento</label>
        <input type="date" name="fechaNacimiento" required />
    </div>  
    
     <div class="form-element">
        <label>Direccion</label>
        <input type="text" name="direccion" required />
    </div>
    
     <div class="form-element">
        <label>Telefono</label>
        <input type="number" name="telefono" required />
    </div>
        
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    	 
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <br>
    <p>Selecciones el tipo de perfil</p>
       <div>
          <input type="radio" id="alumno" name="perfil" value="alumno"
                 checked>
          <label for="alumno">Alumno</label>
        </div>

        <div>
          <input type="radio" id="profesor" name="perfil" value="profesor">
          <label for="profesor">Profesor</label>
        </div>
        
          <div>
          <input type="radio" id="responsable" name="perfil" value="responsable">
          <label for="responsable">Responsable</label>
        </div>
        
        <br>
    
    <button class ="btn btn-primary" type="submit" name="ingresar" value="login">Registrar</button>
    
</form>

</div>

<br>

<div class="<?=($_GET['pantalla']==1 && $_GET['accion']==2?"mostrar":"ocultar")?>">
	<form action="" name="modificarAlumnos">
		<div>
			<h3>Modificar datos de persona</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-primary">Modificar</button>
		</div>
	</form>
</div>

<br>

<div class="<?=($_GET['pantalla']==1 && $_GET['accion']==3?"mostrar":"ocultar")?>" >
	<form action="../App/Orunmila/Controllers/EliminarPersonaController.php" method="POST" name="bajapersona">
		<div>
			<h3>Baja de persona</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="submit" class="btn btn-danger">Realizar baja</button>
		</div>
	</form>
</div>

<br>

<!-- <div class="ocultar"> -->
<div class= "<?=($_GET['pantalla']==2 && $_GET['accion']==1?"mostrar":"ocultar")?>"> 
	<form method="post" action="../App/Orunmila/Controllers/MateriasController.php" name="altaMaterias" >
	
	    <div class="form-element">
	    <h3>Alta de Materia</h3>
	    </div>
	    <div class="form-element">
	        <label>Codigo</label>
	        <input type="number" name="codigoMateria" required />
	    </div>
	    <div class="form-element">
	        <label>Nombre</label>
	        <input type="text" name="nombreMateria" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Horario</label>
	        <input type="text" name="horario" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Carga Horaria</label>
	        <input type="number" name="cargaHoras" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Programa</label>
	        <input type="text" name="programa" required />
	    </div>
	    
	    <p>Seleccione si la materia es extracurricular:</p>

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



<div class="<?=($_GET['pantalla']==2 && $_GET['accion']==2?"mostrar":"ocultar")?>">
	<form action="" name="modificarMaterias">
		<div>
			<h3>Modificar datos de materia</h3>
			<label>Ingresar codigo de materia</label>
			<input type ="search" name = "codigoMateria" required>
			<button type="button" class="btn btn-primary">Modificar</button>
		</div>
	</form>
</div>

<br>

<div class="<?=($_GET['pantalla']==2 && $_GET['accion']==3?"mostrar":"ocultar")?>">
	<form action="" name ="bajaMaterias">
		<div>
			<h3>Baja de materia</h3>
			<label>Ingresar codigo de materia</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-danger">Realizar baja</button>
		</div>
	</form>
</div>

<br>

<div class = "<?=($_GET['pantalla']==4 && $_GET['accion']==1?"mostrar":"ocultar")?>">
<form method="post" name="altaPlan">
<h3>Alta plan de estudio</h3>
	<div class="form-element">
	        <label>Horario</label>
	        <input type="text" name="horario" required />
	    </div>
</form>
</div>

</body>
</html>