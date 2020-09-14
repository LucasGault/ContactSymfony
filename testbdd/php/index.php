<?php 
$host = 'db';
$user = 'devuser';
$passwrd = 'devpass';
$db = 'test_db';

try {
    $bdd = new PDO ('mysql:host=10.40.74.14:6033; dbname=test_db;charset=utf8','root','MYSQL_ROOT_PASSWORD');
} catch (Exception $e) {
    die('Erreur ' . $e->getMessage());
}

$query = $bdd->query('SELECT * FROM Contact');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello PHP</h1>
    <?php 
    while ($donnees = $query->fetch()){
        echo $donnees['Nom'];
    }
    ?>
</body>
</html>