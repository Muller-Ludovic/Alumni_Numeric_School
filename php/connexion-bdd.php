<!-- Connexion base de données -->
<?php
$bdd = 'mysql:host=localhost;dbname=nom_base_de_données'; // Changer nom de la base de données !
$user = 'root'; // Nom utilisateur de la base de données
$pass = 'root'; // Mot de passe base de données

try {
  $pdo = new PDO($bdd,$user,$pass); // $pdo contient les informations base de données, nom utilisateur et mot de passe base de données
}
catch (PDOException $erreur) {
  die ('Error connexion'); // Error si nom utilisateur ou/et mot de passe faux
}
?>