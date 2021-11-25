<?php 
	 $conexion = mysqli_connect('localhost', 'root','', 'progweb');

   // $id=$_POST['id'];
	$tema_interes=$_POST['tema_interes'];
    $pass=$_POST['contra'];

	$sql="UPDATE lectores SET tema_interes='$tema_interes',contra='$pass' WHERE id='1'";

	$result=mysqli_query($conexion,$sql);

    if ($result) {
        echo "Cambio realizado con exto";
    }else {
        echo "error: ".$sql.":".mysqli_error($conexion);
    }

 ?>