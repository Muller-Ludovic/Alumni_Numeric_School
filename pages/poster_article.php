<?php include 'header_p.php';?>

<main>
  <hr class="hr">
  <div class="container-fluid actu">
  <div class="divh2"><h2><strong>Poster un article</strong></h2></div>
  <hr>
  <form action="#" method="POST">
  <div class="divh3co spantel"><h3><strong><input type="text" name="titre_offre" placeholder="Titre article"></strong></h3></div>
  <h5><input type="text" name="auteur" placeholder="Auteur"> - <input type="date" name="date"></h5>
    <div class="row">
    <div class="col-12 text-center">
        <img src="../images/article.png" class="img-fluid"/>
    </div>
    <div class="text-center col-12">
    <p>
      <textarea name="content" id="content" rows="10" class="form-control" placeholder="Contenu"></textarea>
    </p>
    </div>
    </div>
    <br><br>
    <p class="text-center"><button class="btn navbtn" type="submit">Poster</button></p>
    <p class="text-center"><button class="btn btn4" onclick = "history.back()"><a class="aInscri">Annuler</a></button></p>
    <br><br>
    </form>
  </div>
   <hr class="hr"><br><br><br>
</main>

<?php include 'footer_p.php';?>