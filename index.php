<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulaire d'adresse dynamique</title>
</head>
<body>
    <div class="container">
        <h2>Formulaire d'adresses</h2>
        <form action="process.php" method="post">
            <label for="numAddresses">Combien d'adresses avez-vous ?</label>
            <input type="number" name="numAddresses" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
