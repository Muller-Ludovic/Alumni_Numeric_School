<?php include 'header_p.php';?>

<main>
  <hr class="hr">
  <div class="container-fluid actu">
  <div class="divh2"><h2><strong>Poster une offre d'emploi</strong></h2></div>
  <hr>
  <form action="" method="POST">
  <div class="divh3co spantel"><h3><strong><input type="text" name="titre_offre" placeholder="Titre offre d'emploi"></strong></h3></div>
  <h5><input type="text" name="nom_entreprise" placeholder="Nom entreprise"></h5>
    <div class="row">
    <div class="col-12 text-center">
        <img src="../images/board.jpg" class="img-fluid"/>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="divh3co col-12"><h3><strong><input type="text" name="titre" placeholder="Développeur Web"></strong></h3></div>
    <div class="divh4co col-12"><h4><input type="text" name="code" placeholder="57"> - <input type="text" name="ville" placeholder="METZ"></h4></div>
    <div class="divh6co col-12"><h6><input type="date" name="date"></h6></div>
    <div class="text-center col-12">
     <textarea name="description" id="" rows="10" class="form-control" placeholder="Discription du poste"></textarea>
    </div>
    </div>
    <hr>
    <div class="divh2"><h4><strong>PROFILE SOUHAITÉ</strong></h4></div><br>
    <div class="card">
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Type de contrat :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="type" placeholder="CDI"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Horraires :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="horaire" placeholder="35H Horaires normaux"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Salaire :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="salaire" placeholder="Horaire de 10.70 Euros"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Expériences :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="experience" placeholder="2 ans sur poste similaire"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Formation :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="formation" placeholder="Bac+2 ou équivalents Dev"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Permis :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="permis" placeholder="B Véhicule lèger"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Qualification :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="qualification" placeholder="Employé qualifié"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Secteur :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="domaine" placeholder="Informatique"></h5></div>
    <div class="col-12"><h4 class="col-6 text-center p2"><strong>Entreprise :</strong></h4><h5 class="col-6 text-center p2"><input type="text" name="entreprise" placeholder="Metz Numeric School"></h5></div>
    </div>
    <br><br>
    <p class="text-center"><a href="#" class="btn">Poster offre</a></p>
    <p class="text-center"><a href="#" class="btn4" style="text-decoration: none;">Annuler</a></p>
    </form>
    <br><br>
  </div>
   <hr class="hr"><br><br><br>
</main>

<?php include 'footer_p.php';?>