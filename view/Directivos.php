<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

	<h1>Directivos Screen</h1>

<div>

	<form method="post" action="" name="altaAdministrativos" >
    <div class="form-element">
    <h3>Alta de administrativos</h3>
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
        <input type="email" name="Email" required />
    </div>
    
    <button class ="btn btn-primary" type="submit" name="ingresar" value="login">Registrar</button>
    
</form>

</div>

<br>

<div>
	<form action="">
		<div>
			<h3>Modificar datos de administrativo</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-primary">Modificar</button>
		</div>
	</form>
</div>

<br>

<div>
	<form action="">
		<div>
			<h3>Baja de administrativo</h3>
			<label>Ingresar dni</label>
			<input type ="search" name = "dni" required>
			<button type="button" class="btn btn-danger">Realizar baja</button>
		</div>
	</form>
</div>

</body>
</html>