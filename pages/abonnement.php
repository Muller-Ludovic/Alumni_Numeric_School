<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu2">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Mes abonnements aux Emails</strong></h2></div>
      <hr>
        <form method="POST" action="#" id="form">
            <h2 class="h3 mb-3 font-weight-normal text-center">Abonnez-vous à la newsletters pour recevoir les derniers évènements, les actualités et les offres d'emploi</h2>
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
            <div class="col-sm-12 p-0">
            <label><b>Email</b> <span class="star">*</span></label>
            <div><input type="email" id="emailContact" name="email" required="required" class="form-control" placeholder="..." /></div>
            </div>
            <br>
            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="check">
            <label class="form-check-label" for="check">&ensp;J'accepte de recevoir cette newsletter et je comprends que je peux me désabonner à tout moment.</label>
            </div>
            <br><br>
            <button class="btn navbtn" type="submit">S'abonner</button>
        </form>
    </div>
  </section>
</main>

<?php include 'footer_p.php';?>