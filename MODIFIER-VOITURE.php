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
    <h2>MODIFIER UN VOITURE  </h2>
    <form action="MODIFIER-VOITURE.php" method ="POST" enctype="multipart/form-data">
      <div class="input-box">
        <label for="">Matricule</label><input type="text" id="Matricule" name="Matricule" value="<?php echo $row["Matricule"] ?>" placeholder="Matricule" required>
      </div>
      <div class="input-box">
        <label for="">Carburant</label><input type="text" id="Carburant" name="Carburant" value="<?php echo $row["Carburant"] ?>" placeholder="Carburant" required>
      </div>
      <div class="input-box">
         <label for="">Marque</label><input type="text" id="Marque" name="Marque" value="<?php echo $row["Marque"] ?>" placeholder="Marque" required>
      </div>
      <div class="input-box">
         <label for="">Modélé</label><input type="text" id="Modélé" name="Modélé" value="<?php echo $row["Modélé"] ?>" placeholder="Modélé" required>
      </div>
      <div class="input-box">
         <label for="">L’eta</label><input type="text" id="L’eta" name="L’eta" value="<?php echo $row["L’eta"] ?>" placeholder="L’eta" required>
      </div>
      <div class="input-box">
        <label for="">Prix</label> <input type="text" id="Prix" name="Prix" value="<?php echo $row["Prix"] ?>" placeholder="Prix par jour" required>
      </div>
      <div class="input-box">
        <label for="">Date De Circulation</label> <input id="DATE_Circ" name="DATE_Circ" type="date" value="<?php echo $row["DATE_Circ"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">Couleur</label> <input type="text" id="Couleur" name="Couleur" placeholder="COULEUR" value="<?php echo $row["Couleur"] ?>" required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Depart</label> <input id="DATE_deb_taxe" name="DATE_deb_taxe" type="date" value="<?php echo $row["DATE_deb_taxe"] ?>"  required>
      </div> 
      <div class="input-box">
        <label for="">Date De Taxe Fin</label> <input id="DATE_FIN_taxe" name="DATE_FIN_taxe" type="date" value="<?php echo $row["DATE_FIN_taxe"] ?>" required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Depart</label> <input id="DATE_deb_Aassurance" name="DATE_deb_Aassurance" type="date" value="<?php echo $row["DATE_deb_Aassurance"] ?>"  required>
      </div> 
      <div class="input-box">
        <label for="">Date Aassurance Fin</label> <input id="DATE_FIN_Aassurance" name="DATE_FIN_Aassurance" type="date" value="<?php echo $row["DATE_FIN_Aassurance"] ?>"  required>
      </div> 
      <div class="input-box">
        <label for="">CIN Utilisateur</label><input type="text" id="CIN_Uti" name="CIN_Uti"  placeholder="CIN Utilisateur" value="<?php echo $row["CIN_Uti"] ?>" required>
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
  <?php
          //  $photo=$_GET['pic'];
          // Réecriture des variables
        if(isset($_REQUEST['ID'])) 
        {
        $id = $_REQUEST['ID'];
        $sqlSelect = "SELECT * FROM employe WHERE ID = '$id' ";
        $result = $conn->query($sqlSelect);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        }
        if(isset($_POST['submit']))
        {    
            $id = $_REQUEST['ID'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $dateN = $_POST['date_N'];
            $depa = $_POST['depar'];
            $salire = $_POST['salaire'];
            $func = $_POST['fonction'];
            
            $fileName = $_FILES["uploadfile"]["name"];
            $tempName = $_FILES["uploadfile"]["tmp_name"];
            $folder = "image/" . $fileName;
            // if($fileName=="")
            // {
            //     $fileName=$photo;
            // }
            // Requête de modification d'enregistrement
            $sql = "UPDATE `employe`
             SET `Nom`='$nom',`Prenom`='$prenom',`date_de_naissance`='$dateN',`département`='$depa',`salaire`=$salire,`fonction`='$func', `photo`='$fileName'
              WHERE ID='$id';";
             echo $sql;

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
            mysqli_close($conn);
            
            header("location: index.php");
           
        }
        ?>
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->