
<?php
include_once 'db_connection.php';
include_once 'functions.php';

// Obtenez toutes les adresses depuis la base de données
$allAddresses = getAllAddresses();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Liste des Adresses</title>
</head>
<body>
    <div class="container">
        <h2>Liste des Adresses</h2>
        <ul>
            <?php foreach ($allAddresses as $address) : ?>
                <li>
                    <strong>Street:</strong> <?php echo $address['street']; ?><br>
                    <strong>Street Number:</strong> <?php echo $address['street_nb']; ?><br>
                    <strong>Type:</strong> <?php echo $address['type']; ?><br>
                    <strong>City:</strong> <?php echo $address['city']; ?><br>
                    <strong>Zip Code:</strong> <?php echo $address['zipcode']; ?><br>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="./index.php">Go to index</a>
    </div>
</body>
</html>
