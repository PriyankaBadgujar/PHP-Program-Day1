<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<form action="findname.php" method="get">
    username<input type="text" name="username">
    <input type="submit" value="find">
    </form>
    <?php
    $name=$_GET["username"];
    $usernames= array('pihu','priyanka','ajay','Ram');

    if(!$name==''){
        $flag=0;
        foreach($usernames as $value){
            if($name==$value){
                $flag=1;
            }
        }
        if($flag==1){
            echo "welcome $name";
        }
        else{
            echo"wrong username";
        }
    }
    ?>
</body>
</html>