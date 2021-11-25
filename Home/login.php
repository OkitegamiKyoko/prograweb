<?php 
session_start();
$correo = "";
$username = "";
$password    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'progweb');

if(isset($_POST['login'])){
  $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $query = "SELECT * FROM usuarios WHERE correo= '$correo' AND contra='$password'";
$results = mysqli_query($db, $query);

if (empty($correo)) {
  array_push($errors, "Se requiere de un correo para iniciar sesión");
}
if (empty($password)) {
  array_push($errors, "Se requiere de una contraseña para iniciar sesión");
}

if(count($errors) == 0){

if (mysqli_num_rows($results) == 1) {

  while($row = $results->fetch_assoc()) {
    echo "Usuario: " . $row["nombreUsuario"];
    $_SESSION['username'] = $row["nombreUsuario"];
  }
             
 
  header('location: home.php');
}

} else {
  array_push($errors, "Correo o Contraseña incorrectos");
}

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0291918543.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet"> 
    <title>Inicio</title>
</head>
<body>
    <div class="jumbotron-fluid">
        <h1 style="color: white; font-size: 50px; text-align: center; padding-bottom: 20px;">Artículos Prehispánicos</h1>
    </div>
    <div class="barra" style="position: relative; ">
        <ul>
        <li><i class="fa fa-home" style="margin-right: 5px;" id="home"></i><a href="home.php" style="color: white;">
              Inicio</a>
            </li>
            <li><i class="fa fa-list" style="margin-right: 5px;"></i>Categorías</li>
            <div class="search-bar">
            <input type="search" placeholder="Buscar Artículo" class="barra-buscar">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <li><i class="fa fa-user" style="margin-right: 5px;"></i>Iniciar Sesión</li>
        </ul>
    </div>

    <div class="container text-center" style="margin-top: 250px;">
      <h2 style="margin-bottom: 50px;">Inicie Sesión</h2>  
      <form method="POST">
        <div class="form-group">
          <?php include('error.php') ?>
          <label for="exampleInputEmail1">Correo</label>
          <input name="correo" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Contraseña">
        </div>
      <button type="submit" class="btn btn-primary" name="login">Iniciar Sesión</button>
      <a href="#">No tiene una cuenta? De clic aquí para registrarse</a>
</form>
    </div>

<footer style="width: 100%; color: white; background-color: black; padding: 10px; margin-top: 50px;">
  <h3 style="text-align: center;">Todos los derechos reservados</h3>
</footer>

</body>
</html>