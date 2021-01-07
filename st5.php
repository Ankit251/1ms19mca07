<?php

if(isset($_POST['sub'])){
    $arr = array();
    $name = $_POST['nm'];
    $salary = $_POST['sl'];
    $name1 = $_POST['nm1'];
    $salary1 = $_POST['sl1'];
    $name2 = $_POST['nm2'];
    $salary2 = $_POST['sl2'];
    $name4 = $_POST['nm4'];
    $salary4 = $_POST['sl4'];

    $arr[$name] = $salary;
    $arr[$name1] = $salary1;
    $arr[$name2] = $salary2;
    $arr[$name4] = $salary4;

    foreach($arr as $key=>$value){
        echo "Keys are : " . $key ." " . "Values are :" . $value ."<br>";
    }
    arsort($arr);
    $keys = array_keys($arr);

    // for($i=0;$i<count($keys);$i++){
    //     echo $keys[$i] . " ";
    // }
    $sum = array_sum($arr);
    echo "Average is : " . $sum/4 . "<br>";
    echo "Highest employee is" .  $keys[0] . "Salary is" . $arr[$keys[0]] . "<br>";
    echo "Lowest employee is" .  $keys[3] . "Salary is" . $arr[$keys[3]];



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Name:<input type="text" name="nm">
        Salary:<input type="text" name="sl">
        Name:<input type="text" name="nm1">
        Salary:<input type="text" name="sl1">
        Name:<input type="text" name="nm2">
        Salary:<input type="text" name="sl2">
        Name:<input type="text" name="nm3">
        Salary:<input type="text" name="sl3">
        Name:<input type="text" name="nm4">
        Salary:<input type="text" name="sl4">
        <input type="submit" name="sub">

    </form>
</body>
</html>