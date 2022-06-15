<?php 
    include "Connexion.php";
    $sql = "SELECT * FROM voiture";    
      $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="style-voiture.css">
</head>
<body>
    <div class="search-box-s">
        <input type="text" placeholder="search....">
        <a href="#" class="icon-s">
            <i class="fas fa-search"></i>
        </a>
    </div>
    <div class="card">
 <?php while ($row = mysqli_fetch_assoc($result)): ?>
   <div class="cards">
                    <?php echo '<img class="img1" src="'. 'photo/'. $row["photo"].'"/>';?>
                    <a class="img2-c" href="Ajouter-Reparable.php"><img class="img2" src="photo/reparation.png"></a>
                    <label for="">Marque : <span><?php echo $row["Marque"]?></span></label>
                    <label for="">Carburant : <span><?php echo $row["Carburant"]?></span></label>
                    <label for="">Matricule : <span><?php echo $row["Matricule"]?></span></label>
                    <label for="">L’eta : <span><?php echo $row["L’eta"]?></span></label> 
                    <label for="">prix : <span><?php echo $row["Prix_Location"]?></span></label> 
                    <div class="button">
            <?php echo "<a href='AJOUTER-RESERVATION2.php?ID=$row[Matricule]'><button class='btn'>Reserver</button></a>"?>
           <?php echo "<a href='MODIFIER-VOITURE.php?ID=$row[Matricule]'><button class='btn'>Modifier</button></a>"?>
                    </div>                    
              
    </div>
    <?php
        endwhile
    ?>   
</div>
</body>
</html>
<?php
    include "NavBar.php";
?> 