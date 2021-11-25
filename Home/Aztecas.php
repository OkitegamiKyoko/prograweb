<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'progweb');
$query = mysqli_query($db, "SELECT * FROM articulos WHERE nombreArticulo = 'Aztecas'");    

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

    <div class="container text-center" style="margin-top: 250px;">
  <h2 style="margin-bottom: 50px;">Alimentación</h2>  

</div>

<div class="container-fluid text-center">

<?php
            $i = 0;
            while ($row = mysqli_fetch_array($query)) {
                ?>            
                
            <div id="cont" class="contenedor-flex text-center" style="width: 50%; margin: 0 auto;">
                <div class="imagen">
                  <img src=<?php echo $row['imagen']?> alt="alimento" style="width: 300px; height: 300px;">
                </div>
                <div class="cuerpo">
                    <h5 class="nombre"><?php echo 'Nombre: ' . $row['nombreArticulo']; ?></h5>
                    <p class="desc"><?php echo $row['descripcion']; ?></p>
                    <?php  if (isset($_SESSION['username'])) : ?>
                      <div class="comentario text-center">
                      <h2>Agregue un comentario</h2>
                      <section id="wrapper">
                      <textarea type="text" class="input" placeholder="Comente aquí" v-model="newItem" @keyup.enter="addItem()" cols="30" rows="10"></textarea>
                      <div class="text-center">  
                        <button class="btn btn-primary btn-box" v-on:click="addItem()" type="submit">Publicar</button>
                      </div>
                      <h2>Comentarios: </h2>
                            <div class="row">
                                <div class="col-6">
                                  <div class="comment">
                                <p v-for="items in item" v-text="items"></p>
                                  </div>
                                  </div>
                                  </div>
                      </section>
                      </div>
                      <?php else: ?>
                        <h2>Inicie sesion para comentar</h2>
                        <?php endif ?> 
                </div>
            </div>
            <?php
            echo "<br>";
            }
            ?>

</div>
<footer style="width: 100%; color: white; background-color: black; padding: 10px; margin-top: 50px;">
  <h3 style="text-align: center;">Todos los derechos reservados</h3>
</footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script>
            $(document).ready(function(){ 
     
        $(".btn-box").on('click', function(){
        $(".comment").addClass("afterText");
      });
      $("textarea").on('keyup.enter', function(){
        $(".comment").addClass("afterText");
      });
      });
     
    new Vue({
        el: "#wrapper",
        data:{
          newItem: '',
          item: [],
        },
        methods:{
          addItem  (){
          this.item.push(this.newItem);
            this.newItem = "";
          }
      }
     
      });
    </script>


</body>
</html>