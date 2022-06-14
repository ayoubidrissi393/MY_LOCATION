
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
            $date_fin_Res = $_POST['date_fin'];
            // Requête de modification d'enregistrement
            $sql = "UPDATE `reservation`
             SET `date_de_fin_Res`='$date_fin_Res'
              WHERE Code_Res= '$id' ";
            
             $result = mysqli_query($conn, $sql);
             if (mysqli_query($conn, $sql)) {
              echo "New record has been added successfully !";
          }
          else {
              echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
           header("location: Reservation.php");
           
        }

        
        ?>
  <div class="wrapper">
    <h2>MODIFIER UN RESERVATIONS  </h2>
    <form action="MODIFIER-RESERVATION.php?ID=<?php echo $id ?>"  method ="POST">
      <!-- <div class="input-box">
        <label for="">CODE</label><input type="text" placeholder="CODE" required>
      </div> -->
      <div class="input-box">
        <label for="">DATE DEBUIT</label><input type="date" id="debuit" name="debuit" disabled placeholder="DATE DEBUIT RESERVATION" value="<?php echo $row["Date_de_début_Res"] ?>" required>
      </div>
      <div class="input-box">
         <label for="">DATE FIN</label><input type="date" id="date_fin" name="date_fin" placeholder="DATE FIN RESERVATION" value="<?php echo $row["date_de_fin_Res"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">CIN</label> <input type="text" id="CIN_client" name="CIN_client" disabled placeholder=" CIN CLIENT" value="<?php echo $row["CIN_Cli"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">MATRICULE</label> <input type="text" id="MATRICULE" name="MATRICULE" disabled placeholder="MATRICULE VOITURE" value="<?php echo $row["Matricule"] ?>" required>
      </div>
      <div class="input-box">
        <label for="">DATE RESREVATIONS</label> <input type="date" id="DATE_RESREVATIONS" name="DATE_RESREVATIONS" disabled placeholder="DATE RESREVATIONS" value="<?php echo $row["date_de_Reservation"] ?>" required>
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
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->