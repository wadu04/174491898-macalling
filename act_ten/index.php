<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = intval(readline("Enter a number: "));
    $prime = true;

    if($num <= 1){
        $prime = false;
    }else {
        for($j = 2; $j < $num; $j++){
            if ($num % $j == 0){
                $prime = false;
                break;
            }
        }
    }

    if($prime){
        echo "$num is a prime number";
    }else{
        echo "$num is not a prime number";
    }
    ?>
</body>
</html>