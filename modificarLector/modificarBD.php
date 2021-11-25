<?php 
	 $conexion = mysqli_connect('localhost', 'root','', 'progweb');

   // $id=$_POST['id'];
	$tema_interes=$_POST['tema_interes'];

	$sql="UPDATE escritores SET tema_interes='$tema_interes' WHERE id='1'";

	$result=mysqli_query($conexion,$sql);

    if ($result) {
        echo "Cambio realizado con exto";
    }else {
        echo "error: ".$sql.":".mysqli_error($conexion);
    }

 ?>