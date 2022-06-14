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
    
    <!-- <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <a href="AJOUTER-RESERVATION.php"><button class="btn">Reserver</button></a>
            <a href="MODIFIER-VOITURE.php"><button class="btn">Modifier</button></a>
        </div>
    </div> -->
 <?php while ($row = mysqli_fetch_assoc($result)): ?>
   <div class="cards">
               
                    <img class="img1" src="photo/car1.png">
                    <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
                    <label for="">Nom : <span><?php echo ?>/span></label>
                    <label for="">Carburant : <span>Diesel</span></label>
                    <label for="">Matricule : <span>40-B-12345</span></label>
                    <label for="">L’eta : <span>DISPONIBLE</span></label> 
                    <label for="">prix : <span>400</span></label> 
                    <div class="button">
            <a href="AJOUTER-RESERVATION.php"><button class="btn">Reserver</button></a>
            <a href="MODIFIER-VOITURE.php"><button class="btn">Modifier</button></a>
                </div>                    
                <?php
                endwhile
                ?>   
    </div>

    <!-- <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <button class="btn">Reserver</button>
            <button class="btn">Modifier</button>
        </div>
        
    </div> 
    <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <button class="btn">Reserver</button>
            <button class="btn">Modifier</button>
        </div>
        
    </div> <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <button class="btn">Reserver</button>
            <button class="btn">Modifier</button>
        </div>
        
    </div> <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <button class="btn">Reserver</button>
            <button class="btn">Modifier</button>
        </div>
        
    </div> <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <button class="btn">Reserver</button>
            <button class="btn">Modifier</button>
        </div>
        
    </div> <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <button class="btn">Reserver</button>
            <button class="btn">Modifier</button>
        </div>
        
    </div> <div class="cards"> 
        <img class="img1" src="photo/car1.png">
        <a class="img2-c" href=""><img class="img2" src="photo/reparation.png"></a>
        <label for="">Nom : <span>renualt megane 4</span></label>
        <label for="">Carburant : <span>Diesel</span></label>
        <label for="">Matricule : <span>40-B-12345</span></label>
        <label for="">L’eta : <span>DISPONIBLE</span></label> 
        <label for="">prix : <span>400</span></label> 
        <div class="button">
            <button class="btn">Reserver</button>
            <button class="btn">Modifier</button>
        </div>
        
    </div> -->
</div>
</body>
</html>
<?php
    include "NavBar.php";
?> 