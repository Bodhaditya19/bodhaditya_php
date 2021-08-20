<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        for($row=1; $row<=4; $row++){
            for($col=1;$col<=$row;$col++){
                echo "*";
            }
            echo"<br>";
        }
    ?>

</body>

</html>