<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<form action="punto4.php" method="post">
    <div class="form-group">
      <label for="cantidad">Cantidad</label>
      <input type="text"
        class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Ingrese Cantidad">
    </div>
    <button name="btn" id="btn" class="btn btn-primary" href="#" role="button">Enviar</button>
</form>
    
    <table class="table table-striped">
        <tr><th>Number</th></tr>

<?php
if(isset($_POST['btn'])) {
    $vueltas=$_POST['cantidad'];
    $par = 0;
    $contador = 0;
    while ($contador < $vueltas) {
        $par+= 2;  
        ?>
        <tr>
            <td><?php echo($par) ?></td>
        </tr>
        <?php
        $contador++;
       }
       
}
       ?>
    </table>
</body>
</html>