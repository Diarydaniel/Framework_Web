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

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$fonction = $_POST['fonction'];

// Insérer les données dans la base de données
$sql = "INSERT INTO employes (nom, prenom, numero, fonction) VALUES ('$nom', '$prenom', '$numero', '$fonction')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br>
<a href="index.php">Retour à l'accueil</a>
