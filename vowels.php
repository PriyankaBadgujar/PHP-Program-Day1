<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $text=$_GET["text"];

    if($text==''){?>
        <form action="vowels.php" method="get">
        Enter <textarea name="text"></textarea>
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php

        function vowels($text){
            $count=0;
        for($i=0; $i<=strlen($text);$i++){
            if($text[$i]=="a" ||$text[$i]=="e" ||$text[$i]=="i" ||$text[$i]=="o" ||$text[$i]=="u"||
            $text[$i]=="A" ||$text[$i]=="E" ||$text[$i]=="I" ||$text[$i]=="O" ||$text[$i]=="U"){
                $count++;
            }
        }
        return $count;    
    }
    $total_vowels=vowels($text);
    echo("<b>Vowels Present in whole text: $total_vowels</b>");

    ?>

    


    
</body>
</html>