<?php
require __DIR__. '/vendor/autoload.php';
echo "Conexión a la base de datos";
$URL = "sql2.freemysqlhosting.net";
$database = "sql285295";
$usuario = "sql285295";
$password = "vS3%wL8%";
$port = "3306";
// CREAR CONECCION
$conexion = mysqli_connect(            
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

$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/addressList?address=Universidad+de+Panama",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo  $response->raw_body;
// These code snippets use an open-source library. http://unirest.io/php
$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/routes?end=156+5th+Avenue%2C+New+York%2C+NY+10010&start=6+East+57th+Street%2C+New+York%2C+NY+10022",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo  $response->raw_body;
?>
