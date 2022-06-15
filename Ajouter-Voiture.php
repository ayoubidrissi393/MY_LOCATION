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
    <link rel="stylesheet" href="Style-Ajouter-Voiture.css">
   </head>
<body>
  <div class="wrapper">
    <h2>AJOUTER UN VOITURE  </h2>
    <form action="Ajouter-Voiture.php" method ="POST" enctype="multipart/form-data">
      <div class="input-box">
        <label for="">Matricule</label><input type="text" id="Matricule" name="Matricule" placeholder="Matricule" required>
      </div>
      <div class="input-box">
        <label for="">Carburant</label><input type="text" id="Carburant" name="Carburant" placeholder="Carburant" required>
      </div>
      <div class="input-box">
         <label for="">Marque</label><input type="text" id="Marque" name="Marque" placeholder="Marque" required>
      </div>
      <div class="input-box">
         <label for="">Modélé</label><input type="text" id="Modélé" name="Modélé" placeholder="Modélé" required>
      </div>
      <div class="input-box">
         <label for="">L’eta</label><input type="text" id="L’eta" name="L’eta" placeholder="L’eta" required>
      </div>
      <div class="input-box">
        <label for="">Prix</label> <input type="text" id="Prix" name="Prix" placeholder="Prix par jour" required>
      </div>
      <div class="input-box">
        <label for="">Date De Circulation</label> <input id="DATE_Circ" name="DATE_Circ" type="date" required>
      </div>
      <div class="input-box">
        <label for="">Couleur</label> <input type="text" id="Couleur" name="Couleur" placeholder="COULEUR" required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Depart</label> <input id="DATE_deb_taxe" name="DATE_deb_taxe" type="date"  required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Fin</label> <input id="DATE_FIN_taxe" name="DATE_FIN_taxe" type="date"required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Depart</label> <input id="DATE_deb_Aassurance" name="DATE_deb_Aassurance" type="date"  required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Fin</label> <input id="DATE_FIN_Aassurance" name="DATE_FIN_Aassurance" type="date"  required>
      </div> 
      <div class="input-box">
        <label for="">CIN Utilisateur</label><input type="text" id="CIN_Uti" name="CIN_Uti"  placeholder="CIN Utilisateur" required>
      </div>
      <div class="input-PHOTO">
        <label for="">PHOTO</label> <input class="input-ph"  name="uploadfile" type="file" name="uploadfile">
      </div> 
      <div class="button">
      <button type="submit" value="annuler" name="annuler">annuler</button>
         <?php
           if(isset($_POST['annuler']))
           {   
            header("location: Voiture.php");
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
          $ID = $_POST['Matricule'];
          $Carburant = $_POST['Carburant'];
          $Marque = $_POST['Marque'];
          $Modélé = $_POST['Modélé'];
          $Prix = $_POST['Prix'];
          $etat = $_POST['L’eta'];
          $DATE_Circ = $_POST['DATE_Circ'];
          $Couleur = $_POST['Couleur'];
          $DATE_deb_taxe = $_POST['DATE_deb_taxe'];
          $DATE_FIN_taxe = $_POST['DATE_FIN_taxe'];
          $DATE_deb_Aassurance = $_POST['DATE_deb_Aassurance'];
          $DATE_FIN_Aassurance = $_POST['DATE_FIN_Aassurance'];
          $CIN_Uti = $_POST['CIN_Uti'];

          // $photo = $_POST['photo'];

          $fileName = $_FILES["uploadfile"]["name"];
          $tempName = $_FILES["uploadfile"]["tmp_name"];
          $folder = "photo/" . $fileName;


          $sql = "INSERT INTO voiture (`Matricule`, `CIN_Uti`, `Carburant`, `Marque`, `Modélé`,`L’eta`, `Prix_Location`, 
          `Date_de_mise_en_circulation`, `Couleur`, `Date_de_début_taxes`, `Date_de_fin_taxes`,
           `Date_de_début_assurances`, `Date_de_fin_assurances`, `photo`)
           VALUES ('$ID','$CIN_Uti', '$Carburant', '$Marque',$Modélé, '$etat','$Prix', '$DATE_Circ', '$Couleur', '$DATE_deb_taxe',
                   '$DATE_FIN_taxe', '$DATE_deb_Aassurance','$DATE_FIN_Aassurance','$fileName');";
          

           // move the uploaded image into the folder: images
          if (move_uploaded_file($tempName, $folder))  {
              $msg = "Image uploaded successfully";
          }else{
              $msg = "Failed to upload image";
          }
          // if (mysqli_query($conn, $sql)) {
          //     echo "New record has been added successfully !";
          // }
          // else {
          //     echo "Error: " . $sql . ":-" . mysqli_error($conn);
          // }         
           $result = mysqli_query($conn, $sql);
           header("location: Voiture.php");

      }
      ?>
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->