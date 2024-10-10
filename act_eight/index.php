<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numb = 6;
    $fract = 1;

    for ($i = $numb; $i > 0; $i--){
        $fract *= $i;
    }

    echo "Factorial of $numb is : $fract";
    ?>
</body>
</html>