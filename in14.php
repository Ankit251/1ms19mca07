<!-- <?php
$name="1ms07";
if(!preg_match("/[1]+[(ms)(my)]+[19mca]+[(0-9)(0-9)]/i",$name)){
    echo "invalid format";
}
else{
    echo "valid format";
}
?> -->

<?php

if(isset($_POST['sub'])){
    $name= $_POST['nam'];
    if(!preg_match("/[(a-z)(A-Z)]{5,30}/i",$name)){
        echo "Not Matched";
    }else{
        echo "Matched";
    }
    $dob = $_POST['dbb'];
    $now = date('Y-m-d');
    
    $fdob = new DateTime($dob);
    $fnow = new DateTime($now);

    $interval = date_diff($fdob,$fnow);
    $res = $interval->format('%y Years');
    $email = $_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Please emter valid email id";
    }
    // echo $fdob;
    // echo $fnow;
    // $diff = date_diff($db,$ch);
    // echo "Your age is ".$diff."<br>";
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
       Name: <input type="text" name="nam"><br>
       USN: <input type="text" name="usn"><br>
       Email: <input type="text" name="email"><br>    
        Dob:<input type="text" name="dbb"><br>
        Present age:<input type="text" value="<?php echo $res;  ?>" disabled>
        Gender:<input type="radio" name="gender">Male&nbsp;&nbsp;
                <input type="radio" name="gender">Female<br>
        Subject known:<br>
        <input type="checkbox" name="c" value="c">C<br>
        <input type="checkbox" name="c" value="c">C++<br>
        <input type="checkbox" name="c" value="c">Java<br>
        Semester:<select name="sem">
                    <option value="1" name="1">1
                    <option value="2" name="2">2
                 </select>   


        <input type="submit" name="sub">
    </form>
</body>
</html>
