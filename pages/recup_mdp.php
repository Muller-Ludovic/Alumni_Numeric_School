<?php include '../php/mdp.php';?>
<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Récupérer votre mot de passe</strong></h2></div>
      <hr>
      <form action="../index.php" method="POST">
      <h2 class="h3 mb-3 font-weight-normal text-center">Votre mot de passe crypté :</h2>
      <input type="text" value="<?php echo $mdp ?>" name="inputmdp" id="inputmdp" class="form-control">
      <br>
      <div class="col-sm-12 btnCenter">
        <button class="btn navbtn" type="submit">Accueil</button>
        <button class="btn btn2 navbtn"><a href="https://md5decrypt.net/" target="_blank" class="aInscri">Décrypter</a></button>
      </div>
      </form>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>