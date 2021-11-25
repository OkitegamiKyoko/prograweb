<?php 
	 $conexion = mysqli_connect('localhost', 'root','', 'progweb');

   // $id=$_POST['id'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$tema_interes=$_POST['tema_interes'];

	$sql="UPDATE escritores SET direccion='$direccion', telefono='$telefono', tema_interes='$tema_interes' WHERE id='1'";

	$result=mysqli_query($conexion,$sql);

    if ($result) {
        echo "se ha generado el cambio";
    }else {
        echo "error: ".$sql.":".mysqli_error($conexion);
    }

 ?>