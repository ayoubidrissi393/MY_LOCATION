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
    <h2>AJOUTER UN REPARABLE</h2>
    <form action="" method="">
      <!-- <div class="input-box">
        <label for="">CODE</label><input type="text" placeholder="CODE" required>
      </div> -->
      <div class="input-box">
        <label for="">MATRICULE</label><input type="text" placeholder="MATRICULE" required>
      </div>
      <div class="input-box">
         <label for="">DATE DEBUIT REPARI</label><input type="date" placeholder="DATE DEBUIT REPARI" required>
      </div>
      <div class="input-box">
        <label for="">DATE REPARI FIN</label> <input type="date" placeholder="DATE REPARI FIN" required>
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
         <button>annuler</button>
         <!-- <img class="icon-annuler" src="photo/annuler.png"> -->
         <button>valider</button>
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