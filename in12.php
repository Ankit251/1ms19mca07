<?php

$arr = array('name'=>'Ankit','sem'=>'3','sub'=>'php');

if(isset($_POST['display'])){
    foreach($arr as $key=>$value){
        echo "Keys are : " . $key . " values are " . $value;
    }
}
// if(isset($_POST['insert'])){
//      echo '<input type="text" name="ke"> ';
//      echo '<input type="text" name="va">';
//      echo '<input type="submit" name="subm">';
//      if(isset($_POST['subm'])){
//          echo "It is working";
//      }

    
// }

if(isset($_POST['count'])){
    $num = count($arr);
    echo "number of array is " . $num;
}
if(isset($_POST['delete'])){
    unset($arr['sem']);
    echo "After deleting values are : " . "<br>";
    print_r($arr);
}
if(isset($_POST['sort'])){
    asort($arr);
    echo "After sorting values are : " . "<br>";
    print_r($arr);
}
if(isset($_POST['reverse'])){
    $x = array_reverse($arr,true);
    echo "After reversing values are : " . "<br>";
    print_r($x);
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
        Display:<input type="submit" name="display"><br>
        Insert:<input type="submit" name="insert"><br>
        Count:<input type="submit" name="count"><br>
        Delete:<input type="submit" name="delete"><br>
        Sort:<input type="submit" name="sort"><br>
        Reverse:<input type="submit" name="reverse"><br>
    </form>
</body>
</html>