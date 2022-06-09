<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="Style_add_user.css">
   </head>
<body>
  <div class="wrapper">
    <h2>AJOUTER UN UTILISATEUR </h2>
    <form action="#">
      <div class="input-box">
        <label for="">CIN</label><input type="text" placeholder="CIN" required>
      </div>
      <div class="input-box">
        <label for="">PRENOM</label><input type="text" placeholder="PRENOM" required>
      </div>
      <div class="input-box">
         <label for="">NOM</label><input type="text" placeholder="NOM" required>
      </div>
      <div class="input-box">
        <label for="">MOT DE PASSE</label> <input type="password" placeholder=" MOT DE PASSE" required>
      </div>
      <div class="input-box ">
        <label for="">RôLE</label> 
         <input type="radio" class="radio-R" id="ADMIN" name="fav_language" value="ADMIN" style>
         <label class="label_radio" for="ADMIN">ADMIN</label>
         <input type="radio" class="radio-R" id="UTILISATEUR" name="fav_language" value="UTILISATEUR">
         <label class="label_radio" for="UTILISATEUR">UTILISATEUR</label>
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