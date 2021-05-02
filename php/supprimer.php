<!-- Exemple de bouton avec un lien <a> qui fait passer 'action=deleteme' dans l'URL de la page web -->
<button><a href="supprimer.php?action=deleteme">Je veux supprimer mon compte !</a></button>

<!-- L'utilisateur doit être connecté pour cette requete -->
<?php 
  session_start();
	include('co-bdd.php'); // Connexion à la base de données

// Si 'action=deleteme' est passé dans l'URL alors la requete est exécute
if($_GET['action'] == 'deleteme') { // Action dans l'URL
    $reqsup = "DELETE FROM utilisateur WHERE email = '".$_SESSION['email']."'"; // Delete dans table utilisateur avec l'email de la session
    $pdo->query($reqsup);
    unset($_SESSION['email']);
}
?>