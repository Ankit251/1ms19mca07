<?php

//error_reporting(E_ERROR | E_PARSE);
class ankit{
    
    function area_square($si){...
        $res = $si * $si;
        echo "Result is : " . $res;
    }
}
class ankit2 extends ankit{
    
    function area_square($a,$b){
        $ress = $a * $b;
        echo "area of rectangle is : " . $ress;
    }
}
class ankit3 extends ankit{
    
    function area_square($r){
        $re = 2 * (22/7) * $r;
        echo "Circle is : " . $re;
    }
}
$nm = $_POST['sd'];
$nm2 = $_POST['ln'];
$nm3 = $_POST['br'];
$nm4 = $_POST['rd'];
$smt = new ankit();
$sm = new ankit2();
$smtt = new ankit3();
$smt->area_square($nm);
$sm->area_square($nm2,$nm3);
$smtt->area_square($nm4);



?>