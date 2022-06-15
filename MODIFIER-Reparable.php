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
    <link rel="stylesheet" href="Style-Ajouter-reparation.css">
   </head>
<body>
  <div class="wrapper">
    <h2>MODIFIER UN REPARABLE</h2>
    <?php
           // Réecriture des variables
           $id = $_REQUEST['ID'];
        if(isset($_REQUEST['ID'])) {
        
        $sqlSelect = "SELECT * FROM réparation WHERE CODE = '$id' ";
        $result = $conn->query($sqlSelect);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        }
        if(isset($_POST['submit']))
        {    
            $DATE_DEBUIT = $_POST['DATE_DEBUIT_REPARI'];
            $DATE_FIN = $_POST['DATE_REPARI_FIN'];
            // Requête de modification d'enregistrement
            $sql = "UPDATE `réparation`
             SET `Date_de_début_réparation`='$DATE_DEBUIT',`Date_de_fin_réparation`='$DATE_FIN'
              WHERE CODE= '$id' ";
            
             $result = mysqli_query($conn, $sql);
             if (mysqli_query($conn, $sql)) {
              echo "New record has been added successfully !";
          }
          else {
              echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
           header("location: Reparable.php");
           
        }

        
        ?>
    <form action="MODIFIER-Reparable.php?ID=<?php echo $id ?>"  method ="POST">
      <!-- <div class="input-box">
        <label for="">CODE</label><input type="text" placeholder="CODE" required>
      </div> -->
      <div class="input-box">
        <label for="">MATRICULE</label><input type="text" disabled id="MATRICULE" name="MATRICULE" placeholder="MATRICULE" required value="<?php echo $row["Matricule"] ?>">
      </div>
      <div class="input-box">
         <label for="">DATE DEBUIT REPARI</label><input type="date" id="DATE_DEBUIT_REPARI" name="DATE_DEBUIT_REPARI" placeholder="DATE DEBUIT REPARI" required value="<?php echo $row["Date_de_début_réparation"] ?>">
      </div>
      <div class="input-box">
        <label for="">DATE REPARI FIN</label> <input type="date" id="DATE_REPARI_FIN" name="DATE_REPARI_FIN" placeholder="DATE REPARI FIN" required value="<?php echo $row["Date_de_fin_réparation"] ?>">
      </div> 
        <label for="">PROBLEME</label> 
      <div class="input-box-check">
        
        <div class="check">
            <input type="checkbox" id="vidange" name="vidange" value="vidange"> 
        <label for="vidange" class="label-check"> Vidange</label>
        </div>
        <div class="check">
            <input type="checkbox" id="pnus" name="pnus" value="pnus">
        <label for="pnus"  class="label-check">Mécanique</label>
        </div>
        <div class="check">
            <input type="checkbox" id="mécanique" name="mécanique" value="mécanique">
        <label for="mécanique"  class="label-check">Pnus</label>
        </div>
        <div class="check">
            <input type="checkbox" id="autre" name="autre">
        <label for="autre"  class="label-check">Autre</label>
        </div>
        </div>
        <div class="input-box" id="text_autre">
        <label for="">DESCRIPTION</label> <textarea id="AREA" name="AREA" rows="3" cols="40"> </textarea>
      </div> 
      <div class="button">
         <button type="submit" value="annuler" name="annuler">annuler</button>
         <?php
           if(isset($_POST['annuler']))
           {   
            header("location: Reparable.php");
            }
         ?>
         <!-- <img class="icon-annuler" src="photo/annuler.png"> -->
         <button type="submit" value="submit" name="submit">valider</button>
         <!-- <img class="icon-valider" src="photo/valider.png"> -->
      </div>
    </form>
  </div>
  <script>
      document.getElementById("autre").addEventListener("change",check_change)
      var test=false;
      function check_change(){
        if(test==false){
        document.getElementById("text_autre").style.display="block";
        test=true;
        }
        else
        {        
            document.getElementById("text_autre").style.display="none";
            test=false;
        }


      }
  </script>
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->