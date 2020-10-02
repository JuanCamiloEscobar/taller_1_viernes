
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<pre><?php print_r($_POST) ?></pre>
<?php
    $imc;
    if(isset($_POST['btnMasa'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);
    }   
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="frmMasa" name="frmMasa">
        <input type="text" id="peso" name="peso">
        <input type="text" id="altura" name="altura">
        <button name="btnMasa">Llleve</button>
    </form>
<?php 
    if(isset($imc)) {
        $mensaje;
        if($imc < 18.5) {
            $mensaje = 'Peso insuficiente';
        } else if ($imc >= 18.5 && $imc <= 24.9) {
            $mensaje = 'Normopeso';
        }
           else if ($imc >= 25 && $imc <=26.9) {
                $mensaje = 'sobrepeso grado l';
            } else if ($imc >= 27 && $imc <= 29.9) {
                $mensaje = 'Preobecidad';
            } else if ($imc >= 30 && $imc <= 34.9) {
                $mensaje = 'obecidad tipo 1';
            }
                else if ($imc >= 35 && $imc <= 39.9) {
                    $mensaje = 'obecidad tipo 2 ';
                }
                    else if ($imc >= 40 && $imc <= 49.9) {
                        $mensaje = 'obecidad tipo 3(morbida) ';
                    }
                    else if ($imc >50) {
                        $mensaje = 'Gordito extremo ';
        } else {
            $mensaje = 'El ultimito';
        }

        if(isset($mensaje)) {
            echo('<div>'. $mensaje .'</div>');
        }
    }
?>
</body>
</html>