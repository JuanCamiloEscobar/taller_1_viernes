<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form class="form-inline" name="" method="post" action="punto3.php">
        <div class="form-group">
            <label for=""></label>
            <input type="text" name="horast" id="" class="form-control">
            <button type="submit" name="btnn">horas trabajadas</button>
        </div>
    </form>
</head>
<body>
    
<?php 
 $ht=$_POST['horast'];
 $vht=0;
 $tt;
 if(isset($_POST['btnn'])){
   if ($ht >40){
     $vht= 25000;
   }
   else if ($ht <=40){
       $vht=20000;
   }
    $tt= $ht*$vht;
    echo($tt);
 }
    

?>
</body>
</html>