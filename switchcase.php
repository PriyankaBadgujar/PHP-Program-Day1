<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        <form action="switchcase.php" method="get">
        <select name="choice">
	<option>select</option>
	<option>Rainy</option>
	<option>Sunny</option>
	<option>Cold</option>
    <option>Windy</option>
        </select>
        <input type="submit" value="suggest">
        
        </form>


    <?php
    $choice=$_GET["choice"];
      switch($choice){
        case 'Rainy';
            echo"Hot cofee with samosa";
            break;
        case 'Sunny';
            echo"Enjoy icecream";
            break; 
        case 'Cold';
            echo"Hot soup and sleep";
            break; 
        case 'Windy';
            echo"Enjoy playng";
            break;    
        default:
            echo "choose a choice";        

      }
     
    ?>
</body>
</html>