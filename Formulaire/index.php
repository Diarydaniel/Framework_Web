<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Employé</title>
    <link rel="stylesheet" href="css/index.css">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <h1>Inscription des Employés</h1>
        <form action="inscription.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="numero">Numéro :</label>
            <input type="text" id="numero" name="numero" required>

            <label for="fonction">Fonction :</label>
            <input type="text" id="fonction" name="fonction" required>

            <button type="submit">Inscription</button>
        </form>

        <a href="voirliste.php">Voir la liste des inscrits</a>
    </div>
</body>

</html>