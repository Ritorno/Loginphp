<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="Post">
<input type="text" name="Name" id="Name" placeholder="nombre de usuario" require ><br>
<input type="email" name="Email" id="Email" placeholder="correo del usuario" require><br>
<input type="tel" name="Telefono" id="Tel" placeholder="telefono del usuario" require><br>
<input type="text" name="Direccion" id="Dir" placeholder="Direccion del usuario" require><br>
<button trype="submit" > enviar </button>
<button type="submit" > <a href="/phpIII/php.php">Volver</a> </button>
</form>


</body>
</html>

<?php

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Tel=$_POST['Telefono'];
$Dir=$_POST['Direccion'];

echo"<br><hr><table>
<tr>
<td>Nombre</td>
<td>Email</td>
<td>Telefono</td>
<td>Direccion</td>
</tr>
<tr>
<td>".$Name."</td>
<td>".$Email."</td>
<td>".$Tel."</td>
<td>".$Dir."</td>
</tr>
</table>
";