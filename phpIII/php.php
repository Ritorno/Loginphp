<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
<div>
    <h1>Menu de opciones</h1>
<ul>
<li>1. Datos de usuario</li>
<li>2. Suma</li>
<li>3. Resta</li>
<li>4. Division</li>
<li>5. Multiplicacion</li>
</ul>

<form action="" method="Post" > <p>Selecione una opcion</p>  

<input type="number" name="opt" id="opt"  >

<button type="submit" > Ingresar </button>

</form>

</div>

</body>
</html>

<?PHP

$opt=$_POST['opt'];

switch ($opt) {
    case '1':
        header( 'Location: formulario.php' );
        break;
        case '2':
            echo "<script>alert('opcion 2');</script>";
            break;
            case '3':
                echo "<script>alert('opcion 3');</script>";
                break;
                case '4':
                    echo "<script>alert('opcion 4');</script>";
                    break;
                    case '5':
                        echo "<script>alert('opcion 5');</script>";
                        break;
    default:
        echo"por favor seleccione una opcion valida";
        break;
}

echo "<h1>".$opt."</h1>";

