<?php
session_start();
include('co-bdd.php'); // Connexion à la base de données

// Requette sécurisée contre les injections SQL
$stmt = $pdo->prepare('SELECT * FROM utilisateur where email = :email and password = :pass'); // Selectionne tout dans le tableau 'utilisateur' dans la base de données
$stmt->bindValue(':email',$_POST['email']);
$stmt->bindValue(':pass',md5($_POST['password']));
$stmt->execute();
$user = $stmt->fetch();

// Si l'utilisateur n'existe pas
if (empty($user)) {
  // header("Location:index.php");
  die('Error de connexion ou créer un utilisateur');
}
// Si l'utilisateur existe
else {
  $_SESSION['email'] = $user['email'];
  $_SESSION['password'] = $user['password'];
  header("Location:page-cible.php"); // Page cible si utilisateur existe
}
?>