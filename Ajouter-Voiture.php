<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="Style-Ajouter-Voiture.css">
   </head>
<body>
  <div class="wrapper">
    <h2>AJOUTER UN VOITURE  </h2>
    <form action="#">
      <div class="input-box">
        <label for="">Matricule</label><input type="text" placeholder="Matricule" required>
      </div>
      <div class="input-box">
        <label for="">Carburant</label><input type="text" placeholder="Carburant" required>
      </div>
      <div class="input-box">
         <label for="">Nom</label><input type="text" placeholder="Nom" required>
      </div>
      <div class="input-box">
        <label for="">Prix</label> <input type="text" placeholder="Prix par jour" required>
      </div>
      <div class="input-box">
        <label for="">Date De Circulation</label> <input type="date" required>
      </div>
      <div class="input-box">
        <label for="">Couleur</label> <input type="text" placeholder="COULEUR" required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Depart</label> <input type="date"  required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Fin</label> <input type="date"required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Depart</label> <input type="date"  required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Fin</label> <input type="date"  required>
      </div> 
      <div class="input-PHOTO">
        <label for="">PHOTO</label> <input class="input-ph" type="file" name="uploadfile">
      </div> 
      <div class="button">
         <button>annuler</button>
         <!-- <img class="icon-annuler" src="photo/annuler.png"> -->
         <button>valider</button>
         <!-- <img class="icon-valider" src="photo/valider.png"> -->
      </div> 
    </form>
  </div>
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->