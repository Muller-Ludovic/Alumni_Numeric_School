<?php include 'header_p.php';?>

<main>
  <hr class="hr">
  <section class="pb-5 actu3">
    <div class="container py-4">
      <div class="divh2co text-center"><h2><strong>Contact</strong></h2></div>
      <hr>
      <form name="form" method="POST" action="../php/creer_utilisateur.php">
            <div class="row" style="text-align:left">
            <div class="col-md-12">
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
                <div class="col-sm-12 p-0">
                <label><b>Téléphone</b> <span class="star">*</span></label>
                <div><input type="tel" name="tel" id="tel" class="form-control" required placeholder="..." /></div>
                </div>
                <br>
                <div class="col-sm-12 p-0">
                <label><b>Sujet</b> <span class="star">*</span></label>
                <div><input type="text" id="sujet" name="sujet" required="required" class="form-control" placeholder="..." /></div>
                </div>
                <br>
                <div class="col-sm-12 p-0">
                <label><b>Message</b> <span class="star">*</span></label>
                <div><textarea name="message" id="message" cols="30" rows="10" required="required" class="form-control" placeholder="..."></textarea></div>
                </div>
                <br>
                
                <div class="col-sm-12">
                <button class="btn navbtn" type="submit">Envoyer</button>
                </div>
                </div>
            </div>
            <input type="hidden" id="token" name="token" value="WYBFoWpkU8mb40OwMseMz3O-q5Ycq_ywozsuUZv_KGA" />
      </form>
    </div>
    <div class="container-fluid situer">
  <div class="divh2"><h2><strong>Nous situer</strong></h2></div>
  <hr>
  <div class="row justify-content-center">
    <div class="card text-center col-md-3 mx-4">
      <img src="../images/mns 2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><strong>Metz Numeric School</strong></h5>
        <p class="card-text">4 rue Saint-Charles</p>
        <p>57000 Metz</p>
        <p>Tél : <span class="spantel">03 87 74 00 75</span></p>
        <a href="https://www.metz-numeric-school.fr/fr" target="_bank">www.metz-numeric-school.fr</a>
      </div>
    </div>
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2611.521195909488!2d6.179265915683464!3d49.114735879313436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794dc1c1d03eab1%3A0xedbb92a0263f973f!2s4%20Rue%20Saint-Charles%2C%2057000%20Metz!5e0!3m2!1sfr!2sfr!4v1619393600669!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>
  </section>
</main>

<?php include 'footer_p.php';?>