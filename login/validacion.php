<?php include 'include/header.php'; ?>
<?php

	$servidor="localhost";
	$usuarioBD="root";
	$pwdBD="";
	$nomBD="progweb";


	$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

	$login=$_GET["fname"];
	$pass=$_GET["pass"];


	$sql="SELECT pwd,rol  from usuarios where login='".$login."'";
	$result=mysqli_query($db,$sql);
	$numero_filas =mysqli_num_rows($result);

	if($numero_filas==0){
		echo "El usuario es incorrecto";
	}else{

		$mostrar=mysqli_fetch_array($result);
		$rol=$mostrar['rol'];
		if(password_verify($pass, $mostrar['pwd'])){
			session_start();
			$_SESSION["info"]["user"]=$login;
			$_SESSION["info"]["rol"]="admin";

			echo $_SESSION["info"]["user"];

			if($rol=='admin'){
				header("Location: Admin/");
				die();


			}else{
				header("Location: User/");
				
				die();

			}

		}else{
			echo "Contraseña incorrecta";
		}
		
	}


?>

<body style="background-color: rgb(87,35,100)" class="text-white">

	

	<div class="contenido">
		
	</div>
		
	
	

	


<?php include 'include/footer.php'; ?>