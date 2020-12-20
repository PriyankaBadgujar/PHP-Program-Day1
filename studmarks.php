<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$third_num= $_POST['third_num'];

$result1 = '';
$result = '';
$grade = '';

if (is_numeric($first_num) && is_numeric($second_num) && is_numeric($third_num))
 {
    $result1 = ($first_num + $second_num+$third_num);
    $result = $result1/3;
    if($result>=90){
        $grade="A+";
    }
    else if($result>=80 &&$result<90 ){
        $grade="B";
    }
    else if($result>=70 &&$result<80){
        $grade="C";
    }
    else{
        $grade="F";
    }

 }

?>

<body>
    <div >
	<h1>PHP - Simple Average Program</h1>
	  <form action="studmarks.php" method="post" >
            <p>
                <input type="number" name="first_num" required="required" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num"  required="required" /> <b>Second Number</b>
            </p>
           
            <p>
                <input type="number" name="third_num"  required="required" /> <b>Third Number</b>
            </p>
            <p>
                <input  name="total" value="100<?php echo $total; ?>">Total<b></b>
            </p>
            <p>
                <input readonly="readonly" name="result1" value="<?php echo $result1; ?>"> <b>Result of addition</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result of average</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $grade; ?>"> <b>Grade</b>
            </p>
            <input type="submit" name="operator" value="add" />
            <input type="submit" name="operator" value="grade" />
            <!-- <input type="submit" name="operator" value="average" /> -->
           
	  </form>
    </div>
</body>
</html>