<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="grip-container centered">
        <div class="grid=100">
            <div class="contained">
                <div class="grid-100">
                    <div class="heading">
                        <h1>Bring Ajax</h1>
                        <button type="button" class="button" onclick="sendAJAX()">Bring on Content</button>
                        <ul id="ajax">

                        </ul>
                    </div>
                </div>

<table class="table table-dark table-hover" >
    <thead>
        <th scope="col">#</th>
        <th scope="col">Handle</th>
        <th scope="col">Fullname</th>
        <th scope="col">Email</th>
    </thead>
    <tbody>
<?php
    require_once "includes/db1_connect.php";
$sel_stds = "SELECT * FROM students ORDER BY fullname ASC";
$sel_res = ($conn->query($sel_stds));
//for default increment of numbers
$sn=0;

while($sel_row = $sel_res->fetch_assoc()){
    $sn++;
?>
<tr>
    <td><?php print $sn;?></td>
    <td><?php print $sel_row["username"];?></td>
    <td><?php print $sel_row["fullname"];?></td>
    <td><?php print $sel_row["email"];?></td>
    
    <td></td>
</tr>
<?php
}
?>
    </tbody>

</table>
            </div>
        </div>
    </div>

    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'headerContent.html');
        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4){
                document.getElementById('ajax').innerHTML = xhr.responseText;
            }
        };
        function sendAJAX(){
            xhr.send();
            document.getElementById('load').style.display = 'none';
        }
    </script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>