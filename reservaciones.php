<!DOCTYPE html>
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

       if($_POST){
           $database->insert("tb_reservaciones",[
	"nombre" => $_POST["nombre"],
	"apellido" => $_POST["apellido"],
    "id_habitacion" => $_POST["id_habitacion"],
    "cant_adultos" => $_POST["cant_adultos"],
    "cant_ninos" => $_POST["cant_ninos"]
           ]);
       }
?>


<html>
    <head>
        <title>MARCOS HOTEL</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h1>PAGINA DE RESERVACIONES</h1>
       <a class="btn" href="totalreservaciones.php">USER LIST</a>
    <form id="form1" action="" method="post">
        
        <table>    
    <tr>
        <td align="right">Nombre</td>
            <td align="left">
                <input name="nombre" type="text" maxlength="32"/>
					</td>
    </tr>
    
    <tr>
        <td align="right">Apellido</td>
            <td align="left">
                <input name="apellido" type="text" maxlength="32"/>
					</td>
    </tr>
           
    <tr>
        <td align="right">Cantidad de Adultos</td>
            <td align="left">
                <input name="cant_adultos" type="number" maxlength="10"/>
					</td>
					<td align="right">PRECIO: </td>
					<td align="left">
                <?php 
                $data = $database->select("tb_habitaciones", "*");
                $len = count($data);
                for($i=0; $i<$len; $i++){
                    echo"<li class='precio' value='".$data[$i]["id_habitacion"]."'>".$data[$i]["nombre"]." ".$data[$i]["precio_adulto"]." / "."</li>";                 }
                        ?>
					</td>
    </tr>
               
    <tr>
        <td align="right">Cantidad de Niños</td>
            <td align="left">
                <input name="cant_ninos" type="number" maxlength="32"/>
					</td>
					<td align="right">PRECIO: </td>
					<td align="left">
                <?php 
                $data = $database->select("tb_habitaciones", "*");
                $len = count($data);
                for($i=0; $i<$len; $i++){
                    echo"<li class='precio' value='".$data[$i]["id_habitacion"]."'>".$data[$i]["nombre"]." ".$data[$i]["precio_nino"]." / "."</li>";                 }
                        ?>
					</td>
    </tr> 
    
       <tr>
        <td align="right">Tipo de Habitación</td>
        <td align="left">
            <select name="id_habitacion">
            
            <?php 
                $data = $database->select("tb_habitaciones", "*");
                $len = count($data);
                for($i=0; $i<$len; $i++){
                    echo"<option value='".$data[$i]["id_habitacion"]."'>".$data[$i]["nombre"]."</option>";                 }
                ?>
				
            </select>
        </td>
            </tr>
            
        <tr>
            <td colspan="2" align="center">
				<input type="submit" value="RESERVAR" id="reservar"/>
            </td>
        </tr>
        
        </table>
    </form>
    </body>
</html>