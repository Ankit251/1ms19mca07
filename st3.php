<?php

$fd = $_POST['choose'];
$ar = array("ankit"=>"988789789","tanya"=>"88789798","akriti"=>"7689789798");

switch($fd){
    case 'ankit':
        echo $ar['ankit'];
        break;
    case 'tanya':
        echo $ar['tanya'];
        break; 
    case 'akriti':
        echo $ar['akriti'];
        break;
}



?>
<body>
    <form method="POST" action="">
        <select name="choose">
            <option value="ankit" name="ankit">ankit
            <option value="tanya" name="tanya">tanya
            <option value="akriti" name="akriti">akriti
        </select>
    <input type="submit" name="sub"> 
    </form>
</body>