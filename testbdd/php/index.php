<?php 
$host = 'db';
$user = 'devuser';
$passwrd = 'devpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$passwrd,$db);
if ($conn -> connect_error) {
    echo 'erreur ' . $conn->connect_error;

} else {
    echo 'sucess';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello PHP</h1>
</body>
</html>