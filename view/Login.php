<!-- <!DOCTYPE html>
<!-- <html> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

<!-- <head> -->
<!-- <meta charset="ISO-8859-1"> -->
<!-- <title>Login Screen</title> -->
<!-- </head> -->
<!-- <body> -->
<!-- 	<form method="post" action="" name="signup-form"> -->
<!--     <div class="form-element"> -->
<!--     </div> -->
<!--     <div class="form-element"> -->
<!--         <label>Email</label> -->
<!--         <input type="email" name="email" required /> -->
<!--     </div> -->
<!--     <div class="form-element"> -->
<!--         <label>Password</label> -->
<!--         <input type="password" name="password" required /> -->
<!--     </div> -->
<!--     <button type="submit" class ="btn btn-primary" name="ingresar" value="login">Enviar</button> -->
<!-- </form> -->
<!-- </body> -->
<!-- </html> -->

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<?php
session_start();
?>

<html>
<link rel="stylesheet" href="../public/inc/css/stilo.css" />
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <meta charset="ISO-8859-1"> 
	<title>Login Screen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
			</div>
			<div class="card-body">
				<form action="../App/Orunmila/Controllers/LoginController.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Mail" name="mail" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="#">Recuperar contraseña</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>