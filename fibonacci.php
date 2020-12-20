<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="fibonacci.php" method="post">
	Number:<input type="text" name="number" ><br><br><br>
	<input type="submit" name="print" value="Fibonacci Series">
</form>	
 <?php   
function Fibonacci($number){ 
      
 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
      
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
				  
if(isset($_POST["print"]))
{
	$number = $_POST["number"]; 
	for ($counter = 0; $counter < $number; $counter++){   
		echo '<strong>'.Fibonacci($counter).'</strong> '; 
	} 	
}
?> -->
</body>
</html>

