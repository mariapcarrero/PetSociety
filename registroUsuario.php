<?php
session_start();
if ($_SESSION["id"] == -1) {
	header("location:Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrarse</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('imagenes1/bg-01.jpg');"></div>
			<form action="checkuser.php" method="post">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Registrarse
					</span>

					<div class="wrap-input100 validate-input" data-validate="Nombre es requerido">
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" id="namer" name="namer" pattern="[A-Za-z].{2,}" placeholder="Nombre..." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Apellido es requerido">
						<span class="label-input100">Apellido</span>
						<input class="input100" type="text" id="lastnamer" pattern="[A-Za-z].{2,}" name="lastnamer" placeholder="Apellido..." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email válido es requerido: ex@abc.xyz">
						<span class="label-input100">Correo Electrónico</span>
						<input class="input100" type="email" name="email" id="email" placeholder="Correo Electrónico..." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Nombre de Usuario es requerido">
						<span class="label-input100">Nombre de Usuario</span>
						<input class="input100" type="text" id="usrname" name="usrname" pattern="[a-z].{2,}" placeholder="Ej. juanfesba..." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Contraseña es requerida">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" id="pass" name="pass" placeholder="***********" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Fecha de Nacimiento es requerida">
						<span class="label-input100">Fecha de nacimiento</span>
						<input class="input100" type="text" pattern="[0-9]{4}[-][0-9]{2}[-][0-9]{2}" id="birthdate" name="birthdate" placeholder="yyyy-mm-dd" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Número de teléfono es requerido">
						<span class="label-input100">Teléfono</span>
						<input class="input100" type="text" id="phonenumber" pattern="[3][0-9]{9}" name="phonenumber" placeholder="Ej. 3143566787" pattern= "[0-9]{10}" required>
						<span class="focus-input100"></span>
					</div>
					<div class="form-group">
    					<span class="label-input100">Sexo</span>
	    				<select class="selectpicker" name="sexo" id="sexo" required>
	    					<option value="" selected disabled>Escoge uno</option>
		        			<option value="1">Femenino</option>
		        			<option value="2">Masculino</option>
		        			<option value="3">Otro</option>
	    				</select>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Número de la Tarjeta de Crédito es requerido">
						<span class="label-input100">Tarjeta de Crédito</span>
						<input class="input100" id="cardnumber" type="text" pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" placeholder="4000 1234 5678 9010" name="cardnumber" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Código de seguridad es requerido">
						<span class="label-input100">Código de seguridad</span>
						<input class="input100" id="seccode" type="text" pattern="[0-9]{3}" placeholder="000" name="seccode" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Fecha de Vencimiento es requerido">
						<span class="label-input100">Fecha de Vencimiento</span>
						<input class="input100" id="cmonth" type="text" pattern="[0-9]{2}" placeholder="MM" name="cmonth" required> 
   						<input class="input100" id="cyear" type="text" pattern="[0-9]{4}" placeholder="YYYY"  name="cyear" required>  
						<span class="focus-input100"></span>
					</div>
					<div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="register" name="register">
								Registrarse
							</button>
						</div>

						<a href="Login.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Login
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>