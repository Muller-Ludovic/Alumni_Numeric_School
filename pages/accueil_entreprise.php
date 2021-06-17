<?php
session_start();
include('../php/connexion_bdd.php');

if(isset($_SESSION['email']) && isset($_GET['entreprise'])) {
?>
<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Mon compte entreprise</strong></h2></div>
      <hr><br>
        <div class="row justify-content-between">
          <div class="col-3"><a href="" class="profil"><i class="far fa-address-card"></i> Mon profil</a></div>
          <div class="col-3"><a href="" class="profil"><i class="far fa-comments"></i> Ma messagerie</a></div>
          <div class="col-3"><a href="" class="profil"><i class="fas fa-align-left"></i> Mon forum</a></div>
        </div><br>
        <div class="row justify-content-between">
          <div class="col-3"><a href="actualite.php" class="profil"><i class="fas fa-globe"></i> Mon actu</a></div>
          <div class="col-3"><a href="evenements.php" class="profil"><i class="far fa-calendar-alt"></i> Mes évènements</a></div>
          <div class="col-3"><a href="offre.php" class="profil"><i class="fas fa-user-tie"></i> Mes offres d'emploi</a></div>
        </div><br>
        <div class="row justify-content-center">
          <div class="col-3"><a href="poster_offre.php" class="profil"><i class="far fa-check-circle"></i> Poster une offre</a></div>
        </div>
        <br><br><br>
        <div class="text-center">
        <button class="btn btn4"><a href="../php/deconnexion.php" class="aInscri">Déconnection</a></button>
        </div>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>
<?php }
else {
  header('Location:../index.php?vous');
  die();
}
?>