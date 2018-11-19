<?php
session_start();
$_SESSION["id"] = -1;
?>

<!DOCTYPE html>
<!--Descripción: este modulo es el login, donde está la opción de ingresar usuario y contraseña, si el usuario y constraseña son válidos, ingresará.
    Autor: Maria Paula Carrero Rivas y Juan Fernando Escobar
    Fecha creación: 6 de abril 2018
    Versión: 4
 -->
<html>
<head>



<script src=js/prueba.js>

</script>



<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../lib/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 0 auto;
    display: block;
    margin-bottom:20px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    color: white;
    padding: 14px 20px;
    margin: 0 auto;
    border: 4px;
    margin-bottom:8px;
    cursor: pointer;
    display: block;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

label {
  text-align: justify;
  display: block;
  margin: 0 auto;
  width: 50%;
}

.button2 {background-color: #4CAF50;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #33cccc;} /* Red */ 
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}


.imgcontainer {
    text-align: center;
    margin-top: 15px;
}

img.avatar {
    width: 40%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 8px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<!-- Navbar 
<div class="w3-top">
  <div class="w3-bar w3-light-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-pale-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a onclick="window.location.href='principal.html'" class="w3-bar-item w3-button w3-padding-large w3-white">Principal</a>
    <a onclick="window.location.href='login.html'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Ingresar</a>
    <a onclick="window.location.href='loginadmin.html'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Administrador</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">FAQ</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Info</a>
  </div>
-->
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a onclick="window.location.href='login.html'" class="w3-bar-item w3-button w3-padding-large">Ingresar</a>
    <a onclick="window.location.href='loginadmin.html'" class="w3-bar-item w3-button w3-padding-large">Administrador</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">FAQ</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Info</a>
  </div>
</div>
  <div class="imgcontainer">
    <img src="imagenes1/logo.jpg" class="imgcontainer" alt="ppl" style="width:20%">
  </div>
<!--
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Ingresar usuario" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Ingresar contraseña" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div> -->

<!-- Header -->
  <div class="w3-container w3-white w3-center">
    <!--<label>Usuario</label>
    <input id="usuario" type="text" placeholder="Ingresar usuario" name="usern" required>
    <label>Contraseña</label>
    <input type="text" placeholder="Ingresar contraseña" name="psw" required>
    <button onclick="IntentoIngreso()" type="button" class="button2">INGRESAR</button>-->

    <form action="check.php" method="post">

    <label>Usuario</label>
    <input id="usrname" type="text" placeholder="Ingresar usuario" name="usrname" required>
    <label>Contraseña</label>
    <input type="password" placeholder="Ingresar contraseña" name="passwrd" id="passwrd" required>
    <button type="input" class="button2">INGRESAR</button>
    </form>

    <button onclick="window.location.href='recuperarContraseña.html'"" type="button" class="button3" background-color: #f44336;}>¿OLVIDASTE TU CONTRASEÑA?</button>
    </label>
 <button onclick="location.href='registroUsuario.html'" type="button" class="button4" background-color: #33cccc;}>REGISTRARSE</button>
    </label>
    <button onclick="window.location.href='index.html'"" type="button" class="button3" background-color: #f44336;}>CANCELAR</button>
    </label>
    <!--<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">INGRESAR</button> -->
  </div>

</body>
</html>

