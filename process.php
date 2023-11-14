<?php
include_once 'db_connection.php'; 
include_once 'functions.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numAddresses = isset($_POST['numAddresses']) ? (int)$_POST['numAddresses'] : 0;

    if ($numAddresses > 0) {
        // Afficher le formulaire d'adresse dynamique
        echo "<form action='save_addresses.php' method='post'>";
        for ($i = 1; $i <= $numAddresses; $i++) {
            // créer la class 'process Container' pour appliquer le style sur l'ensemble du formulaire
            echo "<div class='processContainer'>"; 
            echo "<h3>Address $i</h3>";
            echo "<label for='street$i'>Street:</label><input type='text' name='street[]' required maxlength='50'><br><br>";
            echo "<label for='street_nb$i'>Street Number:</label><input type='number' name='street_nb[]' required><br><br>";
            echo "<label for='type$i'>Type:</label><select name='type[]' required><option value='livraison'>Livraison</option><option value='facturation'>Facturation</option><option value='autre'>Autre</option></select><br><br>";
            echo "<label for='city$i'>City:</label><input type='text' name='city[]' required><br><br>";
            echo "<label for='zipcode$i'>Zip Code:</label><input type='text' name='zipcode[]' required maxlength='6'><br><br>";
            echo "</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/processStyle.css">
    <title>process</title>
</head>
<body>
        <a href="index.php"><button type="button">Accueil</button></a> <!-- Button to go back to the index.php page -->
        <input id="btn" type='submit' value='Submit Addresses'></form>
</body>
</html>
		

