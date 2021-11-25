<?php
 $conexion = mysqli_connect('localhost', 'root','', 'progweb');
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
      <form class="formulario" method=post action="registroBD.php">

        <h1 id="">Registro Lector (comentario)</h1>
        <div class="contenedor">

        <div class="input-contenedor">
             <input type="text" placeholder="Nombre" name="nombre" style=" width: 170px;">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="Apellidos" name="apellidos" style=" width: 170px;">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="correo" name="correo" style=" width: 170px;">     
           </div>
           <br>
           <div class="input-contenedor">
             <input type="number" placeholder="Edad" name="edad" style=" width: 170px;">     
           </div> 
           <br>
            <div class="input-contenedor">
             <input type="text" placeholder="Tema de interes" name="tema_interes" style=" width: 170px;">
            </div>
            <br>
            <label><input type="checkbox" id="cbox1" value="first_checkbox"> Acepto terminos y condiciones</label><br>
         <a id="btn-abrir-popup" class="search">Leer términos y condiciones </a>



         <br>
         <input type="submit" value="Registrarse" class="button btn-primary" name="registrar" id="registrar">
     </div>
    </form>
    

    </div>


    <!--SEARCH INICIO  -->
      


    <div class="overlay" id="overlay" style="z-index: 1;">
                    <div class="popup" id="popup">
                        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup">X</a>
                        <h3>Términos y condiciones</h3>
                      
                        <form action="">
                            <div class="contenedor-inputs">
                              <li>  Los comentarios solo se podrán eliminar, no podrá modificar o actualizar. </li>
                              <li> Los comentarios solamente los puede agregar usuario registrado.</li>
                              <li> No puede modificar , nombre, correo, de lo contrario sera sancionado.</li>

                                <div class="gcse-searchbox-only" style="
    font-size: 36px;"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--	<script src="popup.js"></script>-->

            <style>
                * {
                    padding: 0;
                    margin: 0;
                    box-sizing: border-box;
                }

              

                .contenedor article {
                    line-height: 28px;
                }

                .contenedor article h1 {
                    font-size: 30px;
                    text-align: left;
                    padding: 50px 0;
                }

                .contenedor article p {
                    margin-bottom: 20px;
                }

                .contenedor article .btn-abrir-popup {
                    padding: 0 20px;
                    margin-bottom: 20px;
                    height: 40px;
                    line-height: 40px;
                    border: none;
                    color: #fff;
                    background: #5E7DE3;
                    border-radius: 3px;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 16px;
                    cursor: pointer;
                    transition: .3s ease all;
                    cursor: pointer;
                }

                .contenedor article .btn-abrir-popup:hover {
                    background: rgba(94, 125, 227, .9);
                }

                /* ------------------------- */
                /* POPUP */
                /* ------------------------- */

                .overlay {
                    background: rgba(0, 0, 0, .3);
                    position: fixed;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    align-items: center;
                    justify-content: center;
                    display: flex;
                    visibility: hidden;
                }

                .overlay.active {
                    visibility: visible;
                }

                .popup {
                    background: #F8F8F8;
                    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
                    border-radius: 3px;
                    font-family: 'Montserrat', sans-serif;
                    padding: 45px;
                    text-align: center;
                    width: 600px;

                    transition: .3s ease all;
                    transform: scale(0.7);
                    opacity: 0;
                }

                .popup .btn-cerrar-popup {
                    font-size: 16px;
                    line-height: 16px;
                    display: block;
                    text-align: left;
                    transition: .3s ease all;
                    color: #BBBBBB;
                }

                .popup .btn-cerrar-popup:hover {
                    color: #000;
                }

                .popup h3 {
                    font-size: 36px;
                    font-weight: 600;
                    margin-bottom: 10px;
                    opacity: 0;
                }

                .popup h4 {
                    font-size: 26px;
                    font-weight: 300;
                    margin-bottom: 40px;
                    opacity: 0;
                }

                .popup form .contenedor-inputs {
                    opacity: 0;
                }

                .popup form .contenedor-inputs input {
                    width: 100%;
                    margin-bottom: 20px;
                    height: 52px;
                    font-size: 18px;
                    line-height: 52px;
                    text-align: center;
                    border: 1px solid #BBBBBB;
                }

                .popup form .btn-submit {
                    padding: 0 20px;
                    height: 40px;
                    line-height: 40px;
                    border: none;
                    color: #fff;
                    background: #5E7DE3;
                    border-radius: 3px;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 16px;
                    cursor: pointer;
                    transition: .3s ease all;
                }

                .popup form .btn-submit:hover {
                    background: rgba(94, 125, 227, .9);
                }

                /* ------------------------- */
                /* ANIMACIONES */
                /* ------------------------- */
                .popup.active {
                    transform: scale(1);
                    opacity: 1;
                }

                .popup.active h3 {
                    animation: entradaTitulo .8s ease .5s forwards;
                }

                .popup.active h4 {
                    animation: entradaSubtitulo .8s ease .5s forwards;
                }

                .popup.active .contenedor-inputs {
                    animation: entradaInputs 1s linear 1s forwards;
                }

                @keyframes entradaTitulo {
                    from {
                        opacity: 0;
                        transform: translateY(-25px);
                    }

                    to {
                        transform: translateY(0);
                        opacity: 1;
                    }
                }

                @keyframes entradaSubtitulo {
                    from {
                        opacity: 0;
                        transform: translateY(25px);
                    }

                    to {
                        transform: translateY(0);
                        opacity: 1;
                    }
                }

                @keyframes entradaInputs {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }
            </style>
            <script>

                var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
                    overlay = document.getElementById('overlay'),
                    popup = document.getElementById('popup'),
                    btnCerrarPopup = document.getElementById('btn-cerrar-popup');

                btnAbrirPopup.addEventListener('click', function () {
                    overlay.classList.add('active');
                    popup.classList.add('active');
                });

                btnCerrarPopup.addEventListener('click', function (e) {
                    e.preventDefault();
                    overlay.classList.remove('active');
                    popup.classList.remove('active');
                });
            </script>
            <!-- END SEARCH -->


<footer style="width: 100%; color: white; background-color: black; padding: 10px; margin-top: 50px;">
  <h3 style="text-align: center;">Todos los derechos reservados</h3>
</footer>

</body>
</html>