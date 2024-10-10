<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $movies = ["The Godfather", "God must be crazy", "Mr.bones", "The Mask","Spirited Away" ];
    foreach($movies as $index => $movies){
        echo ($index + 1 .".")." " . "$movies<br>";
    }
    ?>
</body>
</html>