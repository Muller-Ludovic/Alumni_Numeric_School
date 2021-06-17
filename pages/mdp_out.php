<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Mot de passe oublié</strong></h2></div>
      <hr>
        <form method="POST" action="recup_mdp.php" id="form">
            <h2 class="h3 mb-3 font-weight-normal text-center">Merci de saisir votre email pour récupérer votre mot de passe</h2>
            <br>
            <label for="inputEmail"><b>Email</b></label>
            <input type="email" value="" name="email" id="inputEmail" class="form-control" required autofocus>
            <br>
            <div class="btnCenter">
            <button class="btn navbtn" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>