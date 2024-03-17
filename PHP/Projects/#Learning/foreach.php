<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$names = ["hamo","ahmed","ali","hamed"];
$ages = [20,21,22,20];

foreach($names  as $name){
    foreach($ages as $age){
        echo "my name = $name and age = $age<br>";
}}
?>

</body>
</html>