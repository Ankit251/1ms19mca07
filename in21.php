<?php

if(isset($_POST['sub'])){
    $name=$_POST['nm'];
    $pass = $_POST['pwd'];

    if($name=='ankit' && $pass=='ankit'){
        setcookie('name',$name,time()+10);
        header('location:wlc.php');
    }
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
        Name:<input type="text" name="nm"><br>
        Password:<input type="text" name="pwd"><br>
        <input type="submit" name="sub">
    </form>
</body>
</html>