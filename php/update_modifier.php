<?php
session_start();
include('connexion_bdd.php'); // Connexion à la base de données

$requete = $pdo->query('SELECT * FROM utilisateur where email = "'.$_POST['email'].'" and id != '.$_POST['id']); // Selectionne tout dans le tableau 'utilisateur'
$emailExist = $requete->fetch();

    // Si l'utilisateur existe
    if(empty($emailExist))
    {

        // Requete UPDATE qui modifier le tableau 'utilisateur' et qui vise des variables cible
        $stmt = $pdo->prepare('UPDATE utilisateur set  nom = :nom, prenom = :prenom,  email = :email, WHERE id = :id'); // Variables modifiables

        $stmt->bindValue(':nom',$_POST['nom'], PDO::PARAM_STR);
        $stmt->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_STR);
        $stmt->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue(':id',$_POST['id'], PDO::PARAM_INT);
        $stmt->execute();


        // Modifie un mot de passe sécurisé
        if(!empty($_POST['password']))
        {
        $stmt = $pdo->prepare('UPDATE utilisateur set password = :pass WHERE id = :id');
        $stmt->bindValue(':pass',md5($_POST['password']));
        $stmt->bindValue(':id',$_POST['id'], PDO::PARAM_INT);
        $stmt->execute();
        }


        echo 'Update ok'; // Message info pour dire que le UPDATE est ok
    }
    // Si l'email existe déjà
    else
    {
        echo "L'email existe déjà";
    }
?>