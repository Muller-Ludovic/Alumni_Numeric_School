<!-- Ajouter nouvel utilisateur dans la base de données -->
<?php
session_start();
include('co-bdd.php'); // Connexion à la base de données

$stmt = $pdo->prepare('SELECT * FROM utilisateur WHERE email = :email'); // Selectionne tout dans le tableau 'utilisateur' dans la base de données
$stmt->bindValue(':email',$_POST['email']);
$stmt->execute();
$user = $stmt->fetch();

// Si l'utilisateur n'existe pas
if(empty($user))
{
// Requete SQL INSERT INTO ajoute un nom, prenom, email, mot de passe dans le tableau 'utilisateur' (modifiable)
$req = $pdo->prepare("
    INSERT INTO utilisateur(nom,prenom,email,password) 
    VALUES(:nom, :prenom, :email, :password)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)
    );

    // Si l'utilisateur n'existe pas execute la requete array (ajout dans le tableau un nom, prenom, email, mot de passe)
    $req->execute(
        array(
            ':nom'=>$_POST['nom'],
            ':prenom'=>$_POST['prenom'],
            ':email'=>$_POST['email'],
            ':password'=>md5($_POST['password']),
        )
    );

    $req->closeCursor(); // Arrête la requete
    echo '<script>alert("Votre compte a été crée, cliquez sur <Connexion> pour vous connecter")</script>';
}
// Si l'utilisateur existe déjà
else {
  echo '<script>alert("L\'utilisateur existe déjà, cliquez sur <Connexion> pour vous connecter ou sur <Inscription> pour créer un nouvel utilisateur")</script>';
}
?>
