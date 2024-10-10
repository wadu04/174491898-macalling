<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$string = "Hello";
$reversedString = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
}

echo "Input: \"$string\"<br>";
echo "Output: \"$reversedString\"";
?>

</body>
</html>