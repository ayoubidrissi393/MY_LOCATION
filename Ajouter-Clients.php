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
    <link rel="stylesheet" href="Style-Ajouter-clients.css">
   </head>
<body>
  <div class="wrapper">
    <h2>AJOUTER UN CLIENT </h2>
    <form action="Ajouter-Clients.php" method ="POST" enctype="multipart/form-data">
      <div class="input-box">
        <label for="">CIN</label><input type="text" id="CIN_Cli" name="CIN_Cli" placeholder="CIN" required>
      </div>
      <div class="input-box">
        <label for="">PRENOM</label><input type="text" id="PRENOM" name="PRENOM"  placeholder="PRENOM" required>
      </div>
      <div class="input-box">
         <label for="">NOM</label><input type="text"  id="NOM" name="NOM"  placeholder="NOM" required>
      </div>
      <div class="input-box">
        <label for="">N°PERMIE</label> <input type="text"  id="Numéro_De_Permis" name="Numéro_Permis"  placeholder=" N°PERMIE" required>
      </div>
      <div class="input-box">
        <label for="">TELEPHONE</label> <input type="tel" id="Télé" name="Télé"  placeholder="TELEPHONE" required>
      </div>
      <div class="input-box">
        <label for="">ADRESSE</label> <input type="textarea" id="ADRESSE" name="ADRESSE"  placeholder="ADRESSE" required>
      </div> 
      <div class="input-box">
        <label for="">CIN Utilisateur</label><input type="text" id="CIN_Uti" name="CIN_Uti"  placeholder="CIN Utilisateur" required>
      </div>
      
      <div class="button">
      <button type="submit" value="annuler" name="annuler">annuler</button>
         <?php
           if(isset($_POST['annuler']))
           {   
            header("location: CLIENTS.php");
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
            $ID = $_POST['CIN_Cli'];
            $prenom = $_POST['PRENOM'];
            $nom = $_POST['NOM'];
            $Numéro_Permis = $_POST['Numéro_Permis'];
            $Téléphone = $_POST['Télé'];
            $Adresse = $_POST['ADRESSE'];
            $CIN_Uti = $_POST['CIN_Uti'];
  
            $sql = "INSERT INTO client (`CIN_Cli`, `Prénom`, `Nom`, `Numéro_De_Permis`, `Téléphone`, `Adresse`, `CIN_Uti`)
             VALUES ('$ID', '$prenom', '$nom', '$Numéro_Permis', '$Téléphone', '$Adresse', '$CIN_Uti');";
             $result = mysqli_query($conn, $sql);
             // move the uploaded image into the folder: images
          
           
            header("location: CLIENTS.php");
        }
        ?>
</body>
</html>
<?php
    include "NavBar.php";
?> 
