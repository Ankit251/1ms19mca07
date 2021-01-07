<?php

$id=$_POST['Name'];
echo $id;

$con = mysqli_connect('localhost','root','','tblproject');

$qr = "select * from users where firstname='$id' ";
$r = mysqli_query($con,$qr);

while($row=mysqli_fetch_array($r)){
    echo "Email is " . $row['email'];
}

?>