<?php 
    include "Connexion.php";
  
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
    <h2>MODIFIER UN VOITURE  </h2>
    <?php
          $id = $_REQUEST['ID'];
          if(isset($_REQUEST['ID'])) 
          {
          $sqlSelect = "SELECT * FROM voiture WHERE Matricule = '$id' ";
          $result = $conn->query($sqlSelect);
          $row = $result -> fetch_array(MYSQLI_ASSOC);
          }
          //  $photo=$_GET['pic'];
          // Réecriture des variables
        if(isset($_POST['submit']))
        {    
           
           
            $etat = $_POST['etat'];
            $Prix = $_POST['Prix'];
            $Couleur = $_POST['Couleur'];
            $DATE_deb_taxe = $_POST['DATE_deb_taxe'];
            $DATE_FIN_taxe = $_POST['DATE_FIN_taxe'];
            $DATE_deb_Aassurance = $_POST['DATE_deb_Aassurance'];
            $DATE_FIN_Aassurance = $_POST['DATE_FIN_Aassurance'];
          
            $fileName = $_FILES["uploadfile"]["photo"];
            $tempName = $_FILES["uploadfile"]["tmp_name"];
            $folder = "photo/" . $fileName;
            // if($fileName=="")
            // {
            //     $fileName=$photo;
            // }
            // Requête de modification d'enregistrement
            $sql = "UPDATE `voiture`
             SET `L’eta`='$etat',`Prix_Location`='$Prix',`Couleur`='$Couleur',`Date_de_début_taxes`='$DATE_deb_taxe',`Date_de_fin_taxes`=$DATE_FIN_taxe,
             `Date_de_début_assurances`='$DATE_deb_Aassurance',`Date_de_fin_assurances`='$DATE_FIN_Aassurance', `photo`='$fileName'
              WHERE Matricule ='$id';";

              
            //   move the uploaded image into the folder: images
            if (move_uploaded_file($tempName, $folder))  {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            } 
             
            if (mysqli_query($conn, $sql)) {
                echo "New record has been added successfully !";
            }
            else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            $result = mysqli_query($conn, $sql);   
            header("location: Voiture.php");
        }
        ?>
    <form action="MODIFIER-VOITURE.php?ID=<?php echo $id ?>" method ="POST" enctype="multipart/form-data">
      <div class="input-box">
        <label for="">Matricule</label><input type="text" id="Matricule" name="Matricule" disabled value="<?php echo $row["Matricule"] ?>" placeholder="Matricule" required>
      </div>
      <div class="input-box">
        <label for="">Carburant</label><input type="text" id="Carburant" name="Carburant" disabled value="<?php echo $row["Carburant"] ?>" placeholder="Carburant" required>
      </div>
      <div class="input-box">
         <label for="">Marque</label><input type="text" id="Marque" name="Marque" disabled value="<?php echo $row["Marque"] ?>" placeholder="Marque" required>
      </div>
      <div class="input-box">
         <label for="">Modélé</label><input type="text" id="Modélé" name="Modélé" disabled value="<?php echo $row["Modélé"] ?>" placeholder="Modélé" required>
      </div>
      <div class="input-box">
         <label for="">L’état</label><input type="text" id="etat" name="etat" value="<?php echo $row["L’eta"] ?>" placeholder="L’état" required>
      </div>
      <div class="input-box">
        <label for="">Prix</label> <input type="text" id="Prix" name="Prix" value="<?php echo $row["Prix_Location"] ?>" placeholder="Prix par jour" required>
      </div>
      <div class="input-box">
        <label for="">Date De Circulation</label> <input id="DATE_Circ" name="DATE_Circ" type="date" disabled value="<?php echo $row["Date_de_mise_en_circulation"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">Couleur</label> <input type="text" id="Couleur" name="Couleur" placeholder="COULEUR" value="<?php echo $row["Couleur"] ?>" required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Depart</label> <input id="DATE_deb_taxe" name="DATE_deb_taxe" type="date" value="<?php echo $row["Date_de_début_taxes"] ?>"  required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Fin</label> <input id="DATE_FIN_taxe" name="DATE_FIN_taxe" type="date" value="<?php echo $row["Date_de_fin_taxes"] ?>" required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Depart</label> <input id="DATE_deb_Aassurance" name="DATE_deb_Aassurance" type="date" value="<?php echo $row["Date_de_début_assurances"] ?>"  required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Fin</label> <input id="DATE_FIN_Aassurance" name="DATE_FIN_Aassurance" type="date" value="<?php echo $row["Date_de_fin_assurances"] ?>"  required>
      </div> 
      <div class="input-box">
        <label for="">CIN Utilisateur</label><input type="text" id="CIN_Uti" name="CIN_Uti" disabled    placeholder="CIN Utilisateur" value="<?php echo $row["CIN_Uti"] ?>" required>
      </div>
      <div class="input-PHOTO">
        <label for="">PHOTO</label> 
        <?php echo "<img src=photo/" . $row["photo"] . ">"?>

        <input class="input-ph"  name="uploadfile" type="file" name="uploadfile" >
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
 
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->