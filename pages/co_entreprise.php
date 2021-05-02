<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-5">
      <div class="divh2co text-center"><h2><strong>Accèder à votre espace personnel entreprise</strong></h2></div>
      <hr>
        <form method="POST" action="../php/connexion.php" id="form">
            <h2 class="h3 mb-3 font-weight-normal text-center">Merci de saisir vos identifiants de connexion</h2>
            <br>
            <label for="inputEmail"><b>Email</b></label>
            <input type="email" value="" name="email" id="inputEmail" class="form-control" required autofocus>
            <br>
            <label for="inputPassword"><b>Mot de passe</b></label>
            <input type="password" name="password" id="inputPassword" class="form-control" required>
            <a href="" class="mdpout">MOT DE PASSE OUBLIÉ ?</a>
            <br><br>
            <button class="btn navbtn" type="submit">Se connecter</button>
            <span class="span2">&emsp; OU &emsp;</span>
            <button class="btn btn2 navbtn"><a href="../index.php" class="aInscri">S'inscrire</a></button>
        </form>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>