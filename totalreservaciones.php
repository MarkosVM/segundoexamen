<?php
require  'medoo.php';
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'sistema',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8',
]);
    $data = $database->select("tb_reservaciones", "*");
?>
<html>
	<head>
		<title>MARCOS HOTEL</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<header>
			<h1>Reservaciones totales</h1>
		</header>
	
	
		<ul>
            <?php
            
            $len = count($data);
            for($i=0; $i<$len; $i++){
                echo "<li>".$data[$i]["nombre"]." ".$data[$i]["apellido"]." ".$data[$i]["id_habitacion"]."<a href='total.php?id=".$data[$i]["id_reservacion"]."'> TOTAL PAGAR</a></li>";
            }
            
            ?>
        </ul>
        <a href="reservaciones.php">BACK</a>

	</body>
</html>