<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
    <div id="ank"></diV>
        <input type="text" id="nm"><br>
        <button type="button" onclick="load()">Load</button>
    </form>

    <script>
        function load(){
            var ab = new XMLHttpRequest();
            var data = document.getElementById('nm').value;
            ab.open('GET','final.php?name='+data,true);
            ab.onload = function(){               
                document.getElementById('ank').innerHTML=ab.responseText;
            }
            ab.send()
        }

    </script>
</body>
</html>