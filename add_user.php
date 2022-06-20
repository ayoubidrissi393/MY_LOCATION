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
    <link rel="stylesheet" href="Style_add_user.css">
   </head>
<body>
  <div class="wrapper">
    <h2>AJOUTER UN UTILISATEUR </h2>
    <form action="add_user.php" method ="POST" enctype="multipart/form-data">
      <div class="input-box">
        <label for="">CIN</label><input type="text" id="cin" name="CIN" placeholder="CIN" required>
      </div>
      <div class="input-box">
        <label for="">PRENOM</label><input type="text" id="prenom" name="PRENOM" placeholder="PRENOM" required>
      </div>
      <div class="input-box">
         <label for="">NOM</label><input type="text" id="nom" name="NOM" placeholder="NOM" required>
      </div>
      <div class="input-box">
        <label for="">MOT DE PASSE</label> <input type="password"  id="pswd" name="password" placeholder=" MOT DE PASSE" required>
      </div>
      <div class="input-box ">
        <label for="">RôLE</label> 
         <input type="radio" class="radio-R" id="ADMIN" name="ROLE" value="ADMIN" >
         <label class="label_radio" for="ADMIN">ADMIN</label>
         <input type="radio" class="radio-R" id="UTILISATEUR" name="ROLE" value="UTILISATEUR">
         <label class="label_radio" for="UTILISATEUR">UTILISATEUR</label>
      </div>
    
      <div class="button">
      <button type="submit" value="annuler" name="annuler">annuler</button>
         <?php
           if(isset($_POST['annuler']))
           {   
            header("location: add_user.php");
            }
         ?>
         <!-- <img class="icon-annuler" src="photo/annuler.png"> -->
         <button type="submit" value="submit" name="submit">valider</button>
         <!-- <img class="icon-valider" src="photo/valider.png"> -->
      </div> 
    </form>
    <?php
      
      if(isset($_POST['submit']))
      {    
        $CIN = $_POST['CIN'];  
        $sql="SELECT * FROM utilisateur WHERE CIN_Uti='$CIN'";
        $res= mysqli_query($conn, $sql);
        $result = $res->fetch_assoc();

        if(empty($result))
        {
          $PRENOM = $_POST['PRENOM'];
          $NOM = $_POST['Nom'];
          $password = $_POST['password'];
          $radio = $_POST['ROLE'];
          $sql = "INSERT INTO `utilisateur`(`CIN_Uti`, `Nom`, `Prénom`, `Mot_De_Pass`, `Rôle`) VALUES
           ('$CIN','$NOM','$PRENOM','$password','$radio');";
          $result = mysqli_query($conn, $sql);   
          if($result)
          {
            $PRENOM="";
            $NOM="";
            $password="";
            $radio="";
          }
          header("location: HOME.php");
        }
        else{
          echo"<script> alert ('CIN DEJA CREEA ')</script>";
        }
      }
      ?>
  </div>
</body>
</html>
<?php
    include "NavBar.php";
?> 
<!-- <input type="Submit" value="Register Now"> -->