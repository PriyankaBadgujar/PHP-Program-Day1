<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $string=$_GET["string"];

    if($string==''){?>
        <form action="reversestring.php" method="get">
        Enter name<input type="text" name="string">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        function Reverse_string($string){
        $length=strlen($string);
        for($i=0,$j=$length-1; $i<$j; $i++,$j--){
           $temp=$string[$i];
           $string[$i]=$string[$j];
           $string[$j]=$temp;
        }
        return $string;
        
    }
    $result=Reverse_string($string);
    echo "<b> Reverse string is: $result </b>";


    ?>

    


    
</body>
</html>