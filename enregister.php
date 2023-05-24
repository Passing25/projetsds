<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateNaissance = $_POST['date_de_naissance'];
$dateEntree = $_POST['date_entree'];
$personnePrevenir = $_POST['numero_utile'];

// Configuration de la connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "herman";

try {
  // Création de la connexion PDO
  $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);

  // Configuration des erreurs PDO pour afficher les exceptions
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Préparation de la requête SQL pour l'insertion des données
  $requete = $connexion->prepare("INSERT INTO sds (nom, prenom, date_de_naissance, date_entree, numero_utile) VALUES (:nom, :prenom, :dateNaissance, :dateEntree, :personnePrevenir)");

  // Liaison des paramètres de la requête avec les valeurs
  $requete->bindParam(':nom', $nom);
  $requete->bindParam(':prenom', $prenom);
  $requete->bindParam(':dateNaissance', $dateNaissance);
  $requete->bindParam(':dateEntree', $dateEntree);
  $requete->bindParam(':personnePrevenir', $personnePrevenir);

  // Exécution de la requête
  $requete->execute();

  echo "L'étudiant a été enregistré avec succès.";
} catch(PDOException $e) {
  echo "Erreur lors de l'enregistrement de l'étudiant : " . $e->getMessage();
}
?>
