<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $number=$_GET["number"];

    if($number==''){?>
        <form action="sumofdigits.php" method="get">
        Enter number<input type="number" name="number">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        
        
        function sum($number){
        $sum=0;
        while($number>0){
             $digit=$number%10;
             $sum+=$digit;
             $number=$number/10;
        }
        echo "<b>Sum of digits: $sum<b>";

        }
    sum($number);

    ?>

    


    
</body>
</html>