<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum = 0;
    $num = 1;
    while ($num <= 100){
        $sum += $num;
        $num++;
    }
    echo "The sum of numbers from 1 to 100 is : $sum";
    ?>
</body>
</html>