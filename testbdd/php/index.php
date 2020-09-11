<?php 
$host = 'db';
$user = 'devuser';
$passwrd = 'devpass';
$db = 'test_db';

try {
    $bdd = new PDO ('mysql:host=db;dbname=test_db;charset=utf8','devuser','devpass');
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