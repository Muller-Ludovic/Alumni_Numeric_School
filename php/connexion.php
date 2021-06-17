<?php
session_start();
include('connexion_bdd.php'); // Connexion à la base de données

if(isset($_POST['email'])) // Prend les infos dans la base de données
{

// Requette sécurisée contre les injections SQL
$stmt = $pdo->prepare('SELECT * FROM utilisateur where email = :email and password = :pass and role = :role'); // Selectionne tout dans le tableau 'utilisateur' dans la base de données
$stmt->bindValue(':email',$_POST['email']);
$stmt->bindValue(':pass',md5($_POST['password']));
$stmt->bindValue(':role',$_POST['role']);
$stmt->execute();
$user = $stmt->fetch();

if(!empty($user))
{
$_SESSION['email'] = $user['email'];
$_SESSION['pass'] = $user['pass'];

}
else {
  header('Location:../index.php?error');
  die();
}
}

if (empty($user)) {
    $_SESSION['email'] = $user['email'];
    header('Location:../index.php?error');
    die();
}
// Gère la connexion des utilisateurs
elseif ($_POST['role'] == 'etudiant')
{
    $_SESSION['email'] = $user['email'];
    header("Location: ../pages/accueil_etudiant.php?etudiant");
}
elseif ($_POST['role'] == 'entreprise')
{
    $_SESSION['email'] = $user['email'];
    header("Location: ../pages/accueil_entreprise.php?entreprise");
}
elseif ($_POST['role'] == 'admin')
{
    $_SESSION['email'] = $user['email'];
    header("Location: ../pages/accueil_admin.php?admin");
}
else {
    $_SESSION['email'] = $user['email'];
    header('Location:../index.php?error');
}
?>