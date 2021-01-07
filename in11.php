<?php

if(isset($_POST['sub'])){
    $stri = $_POST['str'];
    $fs = strtolower($stri);
    $fss = str_replace(' ','',$fs);
    $vowels = array('a','e','i','o','u');
    $vowe = '0';
    $consonant = '0';
    for($i=0;$i<strlen($fss);$i++){
        if(in_array($fss[$i],$vowels)){
            $vowe+=1;
        }
        else{
            $consonant+=1;
        }
    }
    echo "Number of vowels are : " . $vowe ."<br>";
    echo "Number of consonants are : ". $consonant . "<br>";
    echo "Occurance of A is : " . preg_match_all('/[aA]/',$fss,$matches) ."<br>";
    echo "Occurance of E is : " . preg_match_all('/[eE]/',$fss,$matches) ."<br>";
    echo "Occurance of I is : " . preg_match_all('/[iI]/',$fss,$matches) ."<br>";
    echo "Occurance of O is : " . preg_match_all('/[oO]/',$fss,$matches) ."<br>";
    echo "Occurance of U is : " . preg_match_all('/[uU]/',$fss,$matches) ."<br>";
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
        Enter string: <input type="text" name="str">
        <input type="submit" name="sub">

    </form>
</body>
</html>