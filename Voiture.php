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
<form  method="POST">
        <div class="search-box-s">
            <input type="text" placeholder="search...."  name="search">
            <button name="search-btn" class="icon-s">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </from>
    <div class="card">
   <?php 
    $search = "";
            if(isset($_POST['search-btn'])){

                $search = $_POST['search'];
            } 
                
                $sql = "SELECT * 
                FROM voiture
                 WHERE Matricule  LIKE '%$search%' OR Marque LIKE '%$search%'   OR Modélé LIKE '%$search%' OR  L’eta LIKE '%$search%'";  
                 $result = mysqli_query($conn,$sql);
                //  $resultCheck =mysqli_num_rows($result);

        while ($row = mysqli_fetch_assoc($result)): 
    ?>
   <div class="cards">
                              
                    <?php echo '<img class="img1" src="'. 'photo/'. $row["photo"].'"/>';?>
                    <?php echo"<a class='img2-c' href='Ajouter-Reparable2.php?ID=$row[Matricule]'><img class='img2' src='photo/reparation.png'></a>"?>
                    <label for="">Marque : <span><?php echo $row["Marque"]?></span></label>
                    <label for="">Carburant : <span><?php echo $row["Carburant"]?></span></label>
                    <label for="">Matricule : <span><?php echo $row["Matricule"]?></span></label>
                    <label for="">L’eta : <span><?php
                      if ($row["L’eta"]=='disponible'){ echo "<p d
                        style='color:green'>disponible</p>";}
                        else{echo "<p style='color:red'>indisponible</p>";} ?>
                    <!-- echo $row["L’eta"] -->
                    </span></label> 
                    <label for="">prix : <span><?php echo $row["Prix_Location"]?></span></label> 
                    <div class="button">

                    <?php if ($row["L’eta"]=='disponible') {
                    echo  "<button  class='btn'><a class='a-btn' href='AJOUTER-RESERVATION2.php?ID=$row[Matricule]'>Reserver</a></button>";
                    echo "<button class='btn'><a class='a-btn' href='MODIFIER-VOITURE.php?ID=$row[Matricule]'>Modifier</a></button>";
                  }
                  else{
                  echo  "<button  class='btn'disabled style='color:red'>Reserver</button>";
                  echo "<button class='btn'><a class='a-btn' href='MODIFIER-VOITURE.php?ID=$row[Matricule]' >Modifier</button></a>";
                    }
                  ?>

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