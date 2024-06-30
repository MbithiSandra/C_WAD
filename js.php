<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="demo">Here</div>
    <script>
       
            document.getElementById("demo").innerHTML = "My First JS code";
    
    </script>
<br>
<br> 
 <button onclick="document.getElementById('myImg').src = 'Images/turn_on.jpg'">Turn On</button>
 <img src="Images/turn_on.jpg" alt="" id="myImg" width="200px">

 <button onclick="document.getElementById('myImg').src = 'Images/turn_off.jpg'">Turn Off</button>
  
 <br>
 <br>
 <a href="" onclick="return confirm('Are you sure?')">Delete</a>

 <br>
 <br>

<span onload = "alert('Database has been connected successfully')"></span>

<br>
 <br>
<button onclick="window.print()">Print this page</button>

<?php
    date_default_timezone_set ("Africa/Nairobi");
    print "Static timer:" .date("H:i:s");
?>

<br>
Dynamic time: <span id = "txt"></span>

<script src="js/script.js"></script>


</body>
</html>