<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Accèder à votre espace personnel étudiant</strong></h2></div>
      <hr>
        <form method="POST" action="../php/connexion.php" id="form">
            <h2 class="h3 mb-3 font-weight-normal text-center">Merci de saisir vos identifiants de connexion</h2>
            <br>
            <label for="inputEmail"><b>Email</b></label>
            <input type="email" value="" name="email" id="inputEmail" class="form-control" required autofocus>
            <br>
            <label for="inputPassword"><b>Mot de passe</b></label>
            <input type="password" name="password" id="inputPassword" class="form-control" required>
            <input type="hidden" id="role" name="role" value="etudiant" />
            <a href="mdp_out.php" class="mdpout">MOT DE PASSE OUBLIÉ ?</a>
            <br><br>
            <div class="btnCenter">
            <button class="btn navbtn" type="submit">Se connecter</button>
            <button class="btn btn2 navbtn"><a href="form_etudiant.php" class="aInscri">S'inscrire</a></button>
            </div>
        </form>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>