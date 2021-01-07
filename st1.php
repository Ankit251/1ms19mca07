<?php

if(isset($_POST['sub'])){
    $name=$_POST['nm'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $plm = $_POST['pgm1'];
    $plm2 = $_POST['pgm2'];

    echo "Your name is : " . $name;
    echo "your email is : " . $email;
    echo "your gender is : " . $gender;
    echo "your programming languages are : " . $plm . $plm2;
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
        Email:<input type="text" name="email">
        Gender:<input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
        Programming language:<input type="checkbox" name="pgm1" value="php">PHP<br>
                            <input type="checkbox" name="pgm2" vale="python">Python<br>
        <input type="submit" name="sub">
    </form>
</body>
</html>