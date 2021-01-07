<?php

if(isset($_POST['sub'])){
    $name=$_POST['nm'];
    echo "upper case is : " . strtoupper($name);
    echo "capitalize is : " . ucwords($name);
    echo "find position of n : " . strpos($name,'nk');
    echo "Extract nki from ankit : " . substr($name,1,3);
    echo "reverse of string is : " . strrev($name);
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
        <input type="text" name="nm">
        <input type="submit" name="sub">
    </form>
</body>
</html>