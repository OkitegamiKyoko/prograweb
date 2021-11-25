<?php 
 $conexion = mysqli_connect('localhost', 'root','', 'progweb');

	$nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $rfc=$_POST['rfc'];
    $edad=$_POST['edad'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $referencias=$_POST['referencias'];
    $tema_interes=$_POST['tema_interes'];

	$sql="INSERT INTO escritores(nombre, apellidos, correo, rfc, edad, direccion, telefono, referencias, tema_interes) VALUES ('$nombre','$apellidos','$correo', '$rfc', '$edad', '$direccion', '$telefono', '$referencias', '$tema_interes')";
    $result=mysqli_query($conexion,$sql);

    if ($result) {
        echo "nuevo registro creado exitosamente";
    }else {
        echo "error: ".$sql.":".mysqli_error($conexion);
    }

 ?>