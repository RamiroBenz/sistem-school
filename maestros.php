<?php 

include 'conexion/cn.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$materia = $_POST['materia'];
$f_nacimiento = $_POST['f_nacimiento'];
$genero = $_POST['genero'];
$foto = $_FILE['foto'];


$sql = "INSERT INTO maestros (nombre, apellido, direccion, email,tel, materia,f_nacimiento, genero, foto)VALUES ('$nombre', '$apellido', '$direccion', '$email','$tel', '$materia','$f_nacimiento', '$genero', '$foto')";
//Ejecutar consulta
	$resultado = mysqli_query($conexion, $sql);

if (!$conexion) {
	echo "Error en la base de datos..";
}else {
	header("location:teacher.php");
}
mysqli_close($conexion);


 ?>