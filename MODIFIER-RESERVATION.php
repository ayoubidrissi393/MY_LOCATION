<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="Style-Ajouter-Reservation.css">
   </head>
<body>
  <div class="wrapper">
    <h2>MODIFIER UN RESERVATIONS  </h2>
    <form action="#">
      <!-- <div class="input-box">
        <label for="">CODE</label><input type="text" placeholder="CODE" required>
      </div> -->
      <div class="input-box">
        <label for="">DATE DEBUIT</label><input type="date" placeholder="DATE DEBUIT RESERVATION" required>
      </div>
      <div class="input-box">
         <label for="">DATE FIN</label><input type="date" placeholder="DATE FIN RESERVATION" required>
      </div>
      <div class="input-box">
        <label for="">CIN</label> <input type="text" placeholder=" CIN CLIENT" required>
      </div>
      <div class="input-box">
        <label for="">MATRICULE</label> <input type="tel" placeholder="MATRICULE VOITURE" required>
      </div>
      <div class="input-box">
        <label for="">DATE </label> <input type="date" placeholder="DATE RESREVATIONS" required>
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