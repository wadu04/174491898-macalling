<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $student_info = [
        "Name" => "Rapha",
        "Age" => 22,
        "Grade" => "A",
        "City" => "Baguio"
    ];
    foreach ($student_info as $key => $value){
        echo "$key : $value <br>";
    }
    ?>
</body>
</html>