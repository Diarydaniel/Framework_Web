<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
    <link rel="stylesheet" href="css/voirliste.css">
</head>

<body>
    <div class="container">
        <h1>Liste des employés inscrits</h1>

        <?php
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gestion_employes";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("La connexion a échoué: " . $conn->connect_error);
        }

        // Récupérer la liste des employés
        $sql = "SELECT nom, prenom, numero, fonction FROM employes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro</th>
                        <th>Fonction</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nom"] . "</td>
                        <td>" . $row["prenom"] . "</td>
                        <td>" . $row["numero"] . "</td>
                        <td>" . $row["fonction"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Aucun employé inscrit.";
        }

        $conn->close();
        ?>

        <a href="index.php">Retour à l'accueil</a>
    </div>
</body>

</html>