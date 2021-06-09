<?php include 'header_p.php';?>

<main>
  <section class="pb-5 actu3">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Inscription étudiant</strong></h2></div>
      <hr>
      <form name="form" method="POST" action="../php/creer_utilisateur.php">
            <div class="row" style="text-align:left">
            <div class="col-md-12">
                <h2 class="h3 mb-3 font-weight-normal text-center">Merci de saisir vos informations d'inscription</h2>
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
                <label><b>Promo</b> <span class="star">*</span></label>
                <div><input type="text" id="promo" name="promo" required="required" class="form-control" placeholder="..." /></div>
                </div>
                <br>
                <div class="col-sm-12 p-0">
                <label><b>Date promo</b> <span class="star">*</span></label>
                <div><input type="text" id="date_promo" name="date_promo" required="required" class="form-control" placeholder="..." /></div>
                </div>
                <br>
                <div class="col-sm-12 p-0">
                <label><b>Email</b> <span class="star">*</span></label>
                <div><input type="email" id="emailContact" name="email" required="required" class="form-control" placeholder="..." /></div>
                </div>
                <br>
                <div class="col-sm-12 p-0">
                <label><b>Mot de passe</b> <span class="star">*</span></label>
                <div><input type="password" name="password" id="password" class="form-control" required placeholder="..." /></div>
                </div>
                <input type="hidden" id="role" name="role" value="etudiant" />
                <input name="captcha" type="text" id="captcha" class="hide-robot">
                <br>
                
                <div class="col-sm-12">
                <button class="btn navbtn" type="submit">Inscription</button>
                <button class="btn btn2 navbtn"><a href="co_etudiant.php" class="aInscri">Connexion</a></button>
                </div>
                </div>
            </div>
      </form>
    </div>
  </section>
  <br><br><br><br>
</main>

<?php include 'footer_p.php';?>