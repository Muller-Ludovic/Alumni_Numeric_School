<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Annuaire</strong></h2></div>
      <hr>
        <form method="POST" action="#" id="form">
            <h2 class="h3 mb-3 font-weight-normal text-center">Rechercher un diplômé</h2>
            <br>
            <div class="col-sm-12 p-0">
            <label><b>Nom</b> <span class="star">*</span></label>
            <div><input type="text" id="nom" name="nom" required="required" class="form-control" placeholder="..." /></div>
            </div>
            <br>
            <div class="col-sm-12 p-0">
            <label><b>Prénom</b> <span class="star">*</span></label>
            <div><input type="text" id="prenom" name="prenom" required="required" class="form-control" placeholder="..." /></div>
            </div>
            <br>
            <br>
            <p class="text-center"><button class="btn navbtn" type="submit">Rechercher</button></p>
        </form>
        <hr>
        <h2 class="h3 mb-3 font-weight-normal text-center">Résultat de la recherche</h2>
        <br>
        <div class="row justify-content-center">
      <img class="img-fluid" src="../images/user.png" alt="user">
      </div>
      <div class="divh3co text-center"><h3><strong>Hervé PADILLA</strong></h3></div>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>