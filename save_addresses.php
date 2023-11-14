<?php
include_once 'db_connection.php'; 
include_once 'functions.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $streets = $_POST['street'];
    $street_nbs = $_POST['street_nb'];
    $types = $_POST['type'];
    $cities = $_POST['city'];
    $zipcodes = $_POST['zipcode'];

    for ($i = 0; $i < count($streets); $i++) {
        $addressData = [
            'street' => $streets[$i],
            'street_nb' => $street_nbs[$i],
            'type' => $types[$i],
            'city' => $cities[$i],
            'zipcode' => $zipcodes[$i],
        ];

        createAddress($addressData); // fonction qui sert a insérer des données dans la base de données
    }

    echo "Adresses enregistrées avec succès.";
} else {
    echo "Méthode de demande invalide.";
}

header("Location:addresses_list.php");
exit();

?>
