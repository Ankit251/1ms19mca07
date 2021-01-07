<?php

if(isset($_POST['sub'])){
    $name = $_POST['pgm'];
    for($x=0;$x<=2;$x++){
        $xml = simplexml_load_file("pgm.xml");
        if($xml->book[$x]->category == 'Programming'){
            echo "book 1 author" . $xml->book[$x]->author . "<br>";
            echo "book 1 price" . $xml->book[$x]->price . "<br>";
            echo "book 1 language" . $xml->book[$x]->category . "<br>";
        }

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
    
    
    <!-- <button type="button" onclick="loadxml()">Xml file</button>
    <div id="demo"></div> -->
    <form method="POST" action="">
    <input type="text" name="pgm" value="Programming">
    <input type="submit" name="sub">
    </form>
    <!-- <script>

        function loadxml(){
            // document.getElementById('demo').innerHTML = 'It is working';
            var xr = new XMLHttpRequest();
            xr.open("GET","pgm.xml",true);
            
            
            xr.onreadystatechange = function(){
                var xmlDoc = xr.responseXML;
                
                
                var name = xmlDoc.getElementsByTagName("category");

                var art = "";

                
                for(var i=0;i<name.length;i++){
                    // art += "Names are - " + name.item(i).firstChild.data + "<br>";
                    if(name.item(i).firstChild.data == 'Programming'){
                        art += "Names are - " + name.item(i).firstChild.data + "<br>";
                    }
                }
                document.getElementById('demo').innerHTML = art;
            }
            xr.send()
        }


    </script> -->
</body>
</html>