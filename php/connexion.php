<?php
session_start();
include('connexion_bdd.php'); // Connexion à la base de données

if(isset($_POST['email'])) // Prend les infos dans la base de données
{

// Requette sécurisée contre les injections SQL
$stmt = $pdo->prepare('SELECT * FROM utilisateur where email = :email and password = :pass'); // Selectionne tout dans le tableau 'utilisateur' dans la base de données
$stmt->bindValue(':email',$_POST['email']);
$stmt->bindValue(':pass',md5($_POST['password']));
$stmt->execute();
$user = $stmt->fetch();

if(!empty($user))
{
$_SESSION['email'] = $user['email'];
$_SESSION['pass'] = $user['pass'];

}
else {
  header('Location:../index.php?error=login');
  die();
}
}

if (empty($user)) {
    $_SESSION['email'] = $user['email'];
    header('Location:../index.php?error=login');
    die();
}
else
{
    $_SESSION['email'] = $user['email'];
    header("Location: ../pages/test.php");
}
?>