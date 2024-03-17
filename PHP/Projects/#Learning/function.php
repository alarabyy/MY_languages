<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function get_operation(int $x, int $y , int $z){
         return $x + $y + $z + $x * $y . "<br/>";
                
                
     }  
     echo get_operation(10,2,3);
    ?>
</body>
</html>