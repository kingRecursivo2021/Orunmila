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
	include "navBar.php"
?>

<h1>Administrativos Screen</h1>

<div class="mostrar">

	<form method="post" action="" name="altaAlumnos" >
    <div class="form-element">
    <h3>Alta de alumno</h3>
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
        <input type="tel" name="telefono" required />
    </div>
    
     <div class="form-element">
        <label>Email</label>
        <input type="email" name="Email" required />
    </div>
    <button class ="btn btn-primary" type="submit" name="ingresar" value="login">Registrar</button>
    
</form>

</div>

<br>

<div class="ocultar">
	<form action="" name="modificarAlumnos">
		<div>
			<h3>Modificar datos de alumno</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-primary">Modificar</button>
		</div>
	</form>
</div>

<br>

<div class="ocultar">
	<form action="" name="bajaAlumnos">
		<div>
			<h3>Baja de alumno</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-danger">Realizar baja</button>
		</div>
	</form>
</div>

<br>

<div class="ocultar">
	<form method="post" action="" name="altaMaterias" >
	
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
	        <label>A�o segun plan de estudio</label>
	        <input type="number" name="a�oPlan" required />
	    </div>
	    
	     <div class="form-element">
	        <label>Temario</label>
	        <input type="text" name="temario" required />
	    </div>
	    
	    <button class ="btn btn-primary" type="submit" name="ingresar" value="login">Registrar</button>
	    
	</form>
</div>

<br>

<div class="ocultar">
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

<div class="ocultar">
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

</body>
</html>