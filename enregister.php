<?php
// if(isset($_POST['submit'])) {
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];
$dateNaissance = $_POST['date_de_naissance'];
$dateEntree = $_POST['date_entree'];
$personnePrevenir = $_POST['numero_utile'];

 include('connexion.php');

  // Préparation de la requête SQL pour l'insertion des données
  $requete = $conn->prepare("INSERT INTO sdsetudiant (nom, prenom, genre, date_de_naissance, date_entree, numero_utile) VALUES (:nom, :prenom, :genre, :dateNaissance, :dateEntree, :personnePrevenir)");

  // Liaison des paramètres de la requête avec les valeurs
  $requete->bindParam(':nom', $nom);
  $requete->bindParam(':prenom', $prenom);
  $requete->bindParam(':genre', $genre);
  $requete->bindParam(':dateNaissance', $dateNaissance);
  $requete->bindParam(':dateEntree', $dateEntree);
  $requete->bindParam(':personnePrevenir', $personnePrevenir);

  // Exécution de la requête
  $requete->execute();

  echo "L'étudiant a été enregistré avec plein succès.";
// }
?>

