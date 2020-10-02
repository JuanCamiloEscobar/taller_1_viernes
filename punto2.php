<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="punto2.php" method="post">
  <label for=""></label>
  <input type="text" name="cantz" id="" class="form-control" placeholder="" aria-describedby="helpId">
  <button type="submit" name="btnn"  >calcular descuento</button>
</form>
    
</body>
</html>

<?php 
 
 if(isset($_POST["btnn"])){
  
$precio= 100000;
$cant= $_POST["cantz"];
$total= $precio*$cant;
$desc=0;

 if ($cant > 8) {
     $desc= $total * 0.5;
     
    }
    else if ($cant <=8 && $cant >3){
        $desc= $total * 0.2;
    }
    else if ($cant ==3 ){
        $desc= $total * 0.1;
    }
$tt= $total - $desc;
echo($tt);


 }
  
?>