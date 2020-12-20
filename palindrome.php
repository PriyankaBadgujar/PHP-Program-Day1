
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form method="post">        
Enter a Number or Name: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {  
        $num = $_POST['num'];  
         
        $reverse = strrev($num);  
          
     
        if($num == $reverse){  
            echo " $num is Palindrome";     
        }else{  
            echo " $num is not a Palindrome";   
        }  
}     
      ?>  
    </body>
    </html>
