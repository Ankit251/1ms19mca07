<?php

$conn = mysqli_connect('localhost','root','','dem');

// $qr = "create table employees(Emp_id int primary key,Emp_name varchar(50) not null,Dept_name varchar(50) not null, salary int not null)";
// $r = mysqli_query($conn,$qr);
// if($r){
//     echo "Created";
// }

// $qrr = "create table departments(dep_id int primary key,Dep_name varchar(50) not null)";
// $rr = mysqli_query($conn,$qrr);
// if($rr){
//     echo "Created";
// }

$qrrr = "select * from employees order by Dept_name";
$res = mysqli_query($conn,$qrrr);

// while($row = mysqli_fetch_array($res)){
//     echo "Dept name is " . $row['Dept_name'];
//     echo "employee name is " . $row['Emp_name'];
// }
$row = mysqli_fetch_all($res,MYSQLI_ASSOC);

foreach($row as $key=>$value){
    echo "employee name is " . $value['Emp_name'] . "<br>";
    echo "Dept_name is ". $value['Dept_name'] ."<br>";
}

$total = 0;
$number = 0;

foreach($row as $key=>$value){
    $total+=$value['salary'];
    $number++;
}
$avg = $total/$number;
echo "Average salary is : " . $total/$number;

$que = "select * from employees where salary > '$avg'";
$rrr = mysqli_query($conn,$que);

$fin = mysqli_fetch_all($rrr,MYSQLI_ASSOC);

foreach($fin as $ke=>$vl){
    echo $vl['Emp_name'] . "<br>";
}
// SELECT Dept_name FROM `employees` GROUP By Dept_name HAVING COUNT(Emp_name) < 2
$query = "select * from employees group by Dept_name having COUNT(Emp_name) < 2";
$sic = mysqli_query($conn,$query);

$re = mysqli_fetch_all($sic,MYSQLI_ASSOC);
foreach($re as $kk=>$vv){
    $a = $vv['Emp_name'];
}

$del = "delete from employees where Emp_name = '$a' ";
$finally = mysqli_query($conn,$del);
if($finally){
    echo "Deleted";
}
?>