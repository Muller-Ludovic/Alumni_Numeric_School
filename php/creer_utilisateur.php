<!-- Ajouter nouvel utilisateur dans la base de données -->
<?php
session_start();
include('connexion_bdd.php'); // Connexion à la base de données

$stmt = $pdo->prepare('SELECT * FROM utilisateur WHERE email = :email'); // Selectionne tout dans le tableau 'utilisateur' dans la base de données
$stmt->bindValue(':email',$_POST['email']);
$stmt->execute();
$user = $stmt->fetch();
$honeypot = $_POST['captcha'];

// Si l'utilisateur n'existe pas
if(empty($user))
{
// Requete SQL INSERT INTO ajoute un nom, prenom, email, mot de passe dans le tableau 'utilisateur' (modifiable)
$req = $pdo->prepare("
    INSERT INTO utilisateur(nom,prenom,promo,date_promo,nom_entreprise,poste_entreprise,email,password,role,captcha) 
    VALUES(:nom, :prenom, :promo, :date_promo, :nom_entreprise, :poste_entreprise, :email, :password, :role, :captcha)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)
    );

    // Si l'utilisateur n'existe pas execute la requete array (ajout dans le tableau un nom, prenom, email, mot de passe, etc...)
    $req->execute(
        array(
            ':nom'=>$_POST['nom'],
            ':prenom'=>$_POST['prenom'],
            ':promo'=>$_POST['promo'],
            ':date_promo'=>$_POST['date_promo'],
            ':nom_entreprise'=>$_POST['nom_entreprise'],
            ':poste_entreprise'=>$_POST['poste_entreprise'],
            ':email'=>$_POST['email'],
            ':password'=>md5($_POST['password']),
            ':role'=>$_POST['role'],
            ':captcha' =>$_POST['captcha'],
        )
    );

    if(empty($honeypot)){
        $req->closeCursor(); // ArrÃªte la requete
        header('Location:../index.php?ok=login');
        die();
    }
    else{
        header('Location:../index.php?skynet');
    }

}
// Si l'utilisateur existe déjà
else {
    header('Location:../index.php?ko');
    die();
}
?>