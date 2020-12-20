<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST["second_num"];
$operator = $_POST['operator'];
$result = '';

if (is_numeric($first_num) && is_numeric($second_num))
 {
    switch ($operator) 
    {
        case " Area of rectangle":
           $result = $first_num * $second_num;
            break;
        case "Area of triangle":
           $result = ($first_num * $second_num)/2;
            break;
        case "Area of squre":
            $result = $first_num * $first_num;
            break;
        case "Area of circle":
            $result = ($first_num**2)*(22/7);
    }
}

?>

<body>
    <div >
	<h1>PHP - Find Area of Squre,Traingle,Rectangle,Circle</h1>
	  <form action="findarea.php" method="post" >
            <p>
               Enter Length or Height or,Side or,Redius<input type="number" name="first_num" required="required" /> <b>First Number</b>
            </p>
            <p>
                Enter W or Base<input type="number" name="second_num"/> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Area of squre" />
            <input type="submit" name="operator" value="Area of triangle" />
            <input type="submit" name="operator" value="Area of circle" />
            <input type="submit" name="operator" value="Area of rectangle" />
	  </form>
    </div>
</body>
</html>