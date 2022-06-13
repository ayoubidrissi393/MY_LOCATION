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
<?php
           // Réecriture des variables
           $id = $_REQUEST['ID'];
        if(isset($_REQUEST['ID'])) {
        
        $sqlSelect = "SELECT * FROM reservation WHERE Code_Res = '$id' ";
        $result = $conn->query($sqlSelect);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        }
        if(isset($_POST['submit']))
        {    
           
            $Date_début_Res = $_POST['Date_de_début_Res'];
            $date_fin_Res = $_POST['date_de_fin_Res'];
            $date_Reservation = $_POST['date_de_Reservation'];
            $CIN_Uti = $_POST['CIN_Uti'];
            $CIN_Cli = $_POST['CIN_Cli'];
            $Matricule = $_POST['Matricule '];
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
    <h2>MODIFIER UN RESERVATIONS  </h2>
    <form action="MODIFIER-RESERVATION.php?ID=<?php echo $id ?>"  method ="POST">
      <!-- <div class="input-box">
        <label for="">CODE</label><input type="text" placeholder="CODE" required>
      </div> -->
      <div class="input-box">
        <label for="">DATE DEBUIT</label><input type="date" placeholder="DATE DEBUIT RESERVATION" value="<?php echo $row["Date_de_début_Res"] ?>" required>
      </div>
      <div class="input-box">
         <label for="">DATE FIN</label><input type="date" placeholder="DATE FIN RESERVATION" value="<?php echo $row["date_de_fin_Res"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">CIN</label> <input type="text" placeholder=" CIN CLIENT" value="<?php echo $row["CIN_Cli"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">MATRICULE</label> <input type="tel" placeholder="MATRICULE VOITURE" value="<?php echo $row["Matricule "] ?>" required>
      </div>
      <div class="input-box">
        <label for="">DATE </label> <input type="date" placeholder="DATE RESREVATIONS" value="<?php echo $row["date_de_Reservation"] ?>" required>
      </div> 
      <div class="input-box">
        <label for="">Matricule  </label> <input type="date" placeholder="Matricule " value="<?php echo $row["Matricule"] ?>" required>
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