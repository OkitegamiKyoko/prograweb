<?php include '../include/header.php'; ?>


<?php

$servidor="localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="progweb";


$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);


if(!$db){
	die("la conexion fallo: ". mysqli_connect_error());

}
else{
	mysqli_query($db, "SET NAMES 'UTF8'");

}

?>

<body style="background-color: rgb(87,95,102)" class="text-white">
	<br>

	<h1>Tabla de Ganancias</h1>
	<br>
	<div class="container" id="tabla">
	<div class=" table-responsive-xl">
	<table  border="5px" class="classgeneral classid1 table-hover table-dark table-striped" >
		<tr>
			<td width="30%">Categoria  </td>
			<td width="30%">Mes  </td>
			<td width="50%">Ganancia  </td>
			
			<td widht="">Opciones:</td>
				
		</tr>

		<?php 
		$sql="SELECT id_ganancias,categoria,mes,ganancia from ganancias";
		$result=mysqli_query($db,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['categoria'] ?></td>
			<td><?php echo $mostrar['mes'] ?></td>
			<td><?php echo $mostrar['ganancia'] ?></td>
			
			
			</td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

	
	</div>
	<br>

	
</div>

	


<?php include '../include/footer.php'; ?>