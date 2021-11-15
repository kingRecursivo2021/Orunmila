<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

<div>

	<form method="POST" name="altaTarea" action="../App/Orunmila/Controllers/ProfesoresController.php"> 
	
	<div class="form-element">
	    <h3>Alta de Materia</h3>
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

<div>

	<form method="POST" name="altaExamen" action="../App/Orunmila/Controllers/ProfesoresController.php"> 
	
	<div class="form-element">
	    <h3>Alta de Examen</h3>
	    </div>
	    <div class="form-element">
	        <label>idExamen</label>
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

</body>
</html>