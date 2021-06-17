<?php
session_start();
include('../php/connexion_bdd.php');

if(isset($_POST['email'])) {

  $email = $_POST['email'];

  $stmt = $pdo->prepare("SELECT password FROM utilisateur where email = '$email'");
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_OBJ);
  $mdp = $user->password;
}
?>