<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP kerstboom</title>
    <style>
        *{
            text-align: center;
        }
    </style>
</head>
<body>

<?php

for ($i = 0; $i < 10; $i++) {
for ($j = 0; $j <= $i; $j++) {
echo "*";
}
echo "*<br>";
}

?>
</body>
</html>