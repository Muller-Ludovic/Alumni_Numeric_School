<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-5">
      <div class="divh2co text-center"><h2><strong>Bienvenue sur votre espace personnel</strong></h2></div>
      <hr>
        <form method="POST" action="../php/connexion.php" id="form">
            <h2 class="h3 mb-3 font-weight-normal text-center">Vous etes connecté</h2>
            <br>
            <button class="btn btn2 navbtn"><a href="../php/deconnexion.php" class="aInscri">Se déconnecter</a></button>
        </form>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>