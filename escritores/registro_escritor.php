<?php
 $conexion = mysqli_connect('localhost', 'root','', 'progweb');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de datos</title>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0291918543.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="estilos.css">

<style>
    .contenedor{
    width: 43%;
    padding: 15px;
    border: 1px solid #aaa;
}
    .formulario{
    background: #fff;
    margin-top: 200px;
    margin-left: 600px;
    padding: 3px;
    background-color:antiquewhite;
}
#registrar{
    margin-left: 30%;
}
.contenedor input{
  font-size: 20px;
}
#registro_escritor{
  margin-left: 70px;
}
</style>

</head>
<body>

<div class="jumbotron-fluid">
        <h1 style="color: white; font-size: 50px; text-align: center; padding-bottom: 20px;">Artículos Prehispánicos</h1>
    </div>
    <div class="barra" style="position: relative; ">
        <ul>
          <li><i class="fa fa-home" style="margin-right: 5px;" id="home"></i><a href="home.php" style="color: white;">
              Inicio
            </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          <i class="fa fa-list"></i> Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <ul class="sub-menu" id="sub-menu" style="display: flex; flex-direction: column;
    list-style-type: none;">
           <li><a class="dropdown-item" href="ali.php" style="color: white;">Alimentación</a></li>
           <li><a class="dropdown-item" href="eco.php" style="color: white;">Economía</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="vesti.php" style="color: white;">Vestimenta</a></li>
          </ul>
        </div>
      </li>
            <div class="search-bar">
            <input type="search" placeholder="Buscar Artículo" class="barra-buscar">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <?php  if (isset($_SESSION['username'])) : ?>
            <li><i class="fa fa-user" style="margin-right: 5px;" id="iniciar"></i><a href="login.php" style="color: white;">
            
    <p>
                Bienvenido
                <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong>
            </p>
            </li>
            <li><i class="fa fa-user" style="margin-right: 5px;" id="cerrar"></i><a href="cerrar.php" style="color: white;">
              Cerrar Sesión
          </li>
            <?php else: ?>
              <li><i class="fa fa-user" style="margin-right: 5px;" id="iniciar"></i><a href="login.php" style="color: white;">
            Iniciar Sesión
            </li>
    <?php endif ?> 
          </a>
        </ul>
    </div>




<form class="formulario" method=post action="registroBD.php">

        <h1 id="registro_escritor">Registro Escritor</h1>
        <div class="contenedor">

        <div class="input-contenedor">
             <input type="text" placeholder="Nombre" name="nombre" style="height: 50px; width:350px">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="Apellidos" name="apellidos" style="height: 50px; width:350px">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="correo" name="correo" style="height: 50px; width:350px">     
           </div>
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="RFC" name="rfc" style="height: 50px; width:350px">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="number" placeholder="Edad" name="edad" style="height: 50px; width:350px">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="Dirección" name="direccion" style="height: 50px; width:350px">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="number" placeholder="Telefono" name="telefono" style="height: 50px; width:350px">
            </div>
            <br>
            <div class="input-contenedor">
             <input type="text" placeholder="referencias de articulos escritos" name="referencias" style="height: 50px; width:350px">     
           </div> 
           <br>
            <div class="input-contenedor">
             <input type="text" placeholder="Tema de interes" name="tema_interes" style="height: 50px; width:350px">
            </div>
            <br>
            <div class="input-contenedor" id="check">            
             <input type="checkbox"><a href="terminos_condiciones.html">Aceptar terminos y condiciones de uso</a>
            </div>
            <br>
         <input type="submit" value="Registrarse" class="button btn-primary" name="registrar" id="registrar" style="height: 50px; width:100px">
     </div>
    </form>
    
</body>
</html>