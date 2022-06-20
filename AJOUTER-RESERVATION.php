<?php 
    include "Connexion.php"
  
?>
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
    <h2>AJOUTER UN RESERVATIONS  </h2>
    
    <form action="AJOUTER-RESERVATION.php" method ="POST" enctype="multipart/form-data">
      <!-- <div class="input-box">
        <label for="">CODE</label><input type="text" placeholder="CODE" required>
      </div> -->
      <div class="input-box">
        <label for="">DATE DEBUIT</label><input  id="DATE_DEBUIT" name="DATE_DEBUIT" type="date" placeholder="DATE DEBUIT RESERVATION" required>
      </div>
      <div class="input-box">
         <label for="">DATE FIN</label><input  id="DATE_FIN" name="DATE_FIN" type="date" placeholder="DATE FIN RESERVATION" required>
      </div>  
      <div class="input-box">
        <label for="">CIN Client</label> <input  id="CIN_Cli" name="CIN_Cli" type="text" placeholder="CIN CLIENT" required>
      </div>
      <div class="input-box">
        <label for="">CIN Utilisateur</label><input type="text" id="CIN_Uti" name="CIN_Uti"  placeholder="CIN Utilisateur" required>
      </div>
      <div class="input-box">
        <label for="">MATRICULE</label> <input id="MATRICULE" name="MATRICULE" type="text"  placeholder="MATRICULE VOITURE" required>
      </div>
      <div class="input-box">
        <label for="">DATE RESREVATIONS </label> <input id="DATE_RESR" name="DATE_RESR" type="date" placeholder="DATE RESREVATIONS" required>
      </div> 
 
      <div class="button">
      <button type="submit" value="annuler" name="annuler">annuler</button>
         <?php
           if(isset($_POST['annuler']))
           {   
            header("location: Reservation.php");
            }
         ?>
         <!-- <img class="icon-annuler" src="photo/annuler.png"> -->
         <button type="submit" value="submit" name="submit">valider</button>
         <!-- <img class="icon-valider" src="photo/valider.png"> -->
      </div>
    </form>
  </div>
  <?php
      
      if(isset($_POST['submit']))
      {    
          $DATE_debuit = $_POST['DATE_DEBUIT'];
          $fin = $_POST['DATE_FIN'];
          $CIN_Cli = $_POST['CIN_Cli'];
          $MATRICULE = $_POST['MATRICULE'];
          $DATE_RESR = $_POST['DATE_RESR'];
          $CIN_Uti = $_POST['CIN_Uti'];
        

          $sql = "INSERT INTO reservation (`Date_de_début_Res`, `date_de_fin_Res`, `date_de_Reservation`, `CIN_Uti`, `CIN_Cli`, `Matricule`)
           VALUES ('$DATE_debuit', '$fin', '$DATE_RESR', '$CIN_Uti', '$CIN_Cli', '$MATRICULE');";
          $result = mysqli_query($conn, $sql);
           // move the uploaded image into the folder: images
        
         
          header("location: Reservation.php");
      }
      ?>
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->