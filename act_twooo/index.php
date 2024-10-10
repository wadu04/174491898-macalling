<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$password = "password123";
do {
    
    $user = readline("Please enter the password: "); 
    
    if ($user != $password) {
        echo "Incorrect password.\n";
    }
} while ($user != $password);

echo "Access Granted.\n";
?>

</body>
</html>