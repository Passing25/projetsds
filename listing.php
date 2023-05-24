<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">

        <title>Document</title>
</head>
<body>

<?php
include('connexion.php');


// Requête SQL pour sélectionner les noms, prénoms, dates de naissance et mots de passe des utilisateurs
$sql = "SELECT id, nom, prenom,genre, date_de_naissance, date_entree, numero_utile FROM sdsetudiant";

// Exécution de la requête
$stmt = $conn->query($sql);

// Traitement des résultats
echo "<table class='table table-hover'>";
echo "<tr class='bg-secondary text-danger'>
<th scope='col'>Numero</th>
<th scope='col' class=''>Nom</th>
<th scope='col'>Prenom</th>
<th scope='col'>Genre</th>
<th scope='col'>Date de naissance</th>
<th scope='col'>Date d'entrée</th>
<th scope='col'>Personne a prévenir</th>
</tr>";

$numlist = 1;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $numlist . "</td>";
    echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
    echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
    echo "<td>" . htmlspecialchars($row['genre']) . "</td>";
    echo "<td>" . htmlspecialchars($row['date_de_naissance']) . "</td>";
    echo "<td>" . htmlspecialchars($row['date_entree']) . "</td>";
    echo "<td>" . htmlspecialchars($row['numero_utile']) . "</td>";
    echo "</tr>";
    
    $numlist++; 
}

echo "</table>";
?>
<?php

        include('footer.php');
?>   
</body>
</html>
