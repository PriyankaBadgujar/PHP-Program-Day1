<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $n3=$_GET["n3"];
    if($n1=="" && $n2==""&&$n3==""){
    ?>

<form action="greaterform.php" method="get">
        Number 1<input type="number" name="n1">
        Number 2<input type="number" name="n2">
        Number 3<input type="number" name="n3">
        <input type="submit" value="find">
    </form>
    <?php }
    
   
if($n1>$n2 && $n1>$n3)
{
    echo "greater of three no:" ,$n1;
}

if($n2>$n1 && $n2>$n3)
 {
     echo "greater of three no:" ,$n2;
}

if($n3>$n2 && $n3>$n1)
{
    echo "greater of three no:" ,$n3;
}
?>

</body>
</html>