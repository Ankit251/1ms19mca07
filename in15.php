<?php

if(isset($_POST['sub'])){
    $nme = $_POST['nm'];
    $fn = explode(',',$nme);
    $ev=0;
    $od=0;
    $prime = 0;

    function prime_num($value){
        for($i=2;$i<=$value/2;$i++){
            if($value%$i==0){
                return 0;
            }
        }
        return 1;
    }
    for($i=0;$i<count($fn);$i++){
        if($fn[$i] % 2 == 0){
            $ev +=1;
        }else{
            $od+=1;
        }
    }

    foreach($fn as $key=>$value){
        if(prime_num($value)){
            $prime++;
        }
    }
    echo "even are" . $ev;
    echo "odd is " . $od;
    echo "Prime is " . $prime;
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