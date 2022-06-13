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
<?php
           // Réecriture des variables
           $id = $_REQUEST['ID'];
        if(isset($_REQUEST['ID'])) {
        
        $sqlSelect = "SELECT * FROM client WHERE CIN_Cli = '$id' ";
        $result = $conn->query($sqlSelect);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        }
        if(isset($_POST['submit']))
        {    
           
            $prenom = $_POST['Prénom'];
            $nom = $_POST['Nom'];
            $numero_permis = $_POST['N_PERMIE'];
            $tel = $_POST['tele'];
            $adresse = $_POST['ADRESSE'];
            // Requête de modification d'enregistrement
            $sql = "UPDATE `client`
             SET `Prénom`='$prenom',`Nom`='$nom',`Numéro_De_Permis`='$numero_permis',`Téléphone`='$tel',`Adresse`='$adresse'
              WHERE CIN_Cli= '$id' ";
            
             $result = mysqli_query($conn, $sql);
             if (mysqli_query($conn, $sql)) {
              echo "New record has been added successfully !";
          }
          else {
              echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
           header("location: CLIENTS.php");
           
        }

        
        ?>
        
  <div class="wrapper">
    <h2>MODIFIER UN CLIENT </h2>
    <form action="modifier-Clients.php?ID=<?php echo $id ?>"  method ="POST">
      <div class="input-box">
        <label for="">CIN</label><input type="text" id="CIN_Cli" name="CIN_Cli" placeholder="CIN" value="<?php echo $row["CIN_Cli"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">PRENOM</label><input type="text" id="Prénom" name="Prénom" placeholder="PRENOM" value="<?php echo $row["Prénom"] ?>" required>
      </div>
      <div class="input-box">
         <label for="">NOM</label><input type="text" id="Nom" name="Nom" placeholder="NOM" value="<?php echo $row["Nom"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">N°PERMIE</label> <input type="text" id="N_PERMIE" name="N_PERMIE" placeholder=" N°PERMIE" value="<?php echo $row["Numéro_De_Permis"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">TELEPHONE</label> <input type="tel" id="tele" name="tele" placeholder="TELEPHONE" value="<?php echo $row["Téléphone"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">ADRESSE</label> <input type="textarea" id="ADRESSE" name="ADRESSE" placeholder="ADRESSE" value="<?php echo $row["Adresse"] ?>" required>
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
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->