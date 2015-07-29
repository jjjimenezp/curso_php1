<?php
echo "Conexión a la base de datos";
$URL = "sql2.freemysqlhosting.net";
$database = "sql285295";
$usuario = "sql285295";
$password = "vS3%wL8%";
$port = "3306";
// CREAR CONECCION
$conexion = mysql_connect(            
	                  $URL,
	                  $usuario,
	                  $password,
	                  $database,
	                  $port);
if (!$conexion){
	die ("Finalizado la conexion");
}
echo "Conexion exitosa";
$query ="select * from demo";
$result = mysqli_query($conexion,$query);
while ($row= mysqli_fetch_assoc($result)){
	echo $row ['id']." ".$row['nombre']. " ". 
	$row['descripcion'];
}
mysqli_close(conexion);
?>