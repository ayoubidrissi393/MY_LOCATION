<?php 
    include "Connexion.php"
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title> 
     <link rel="stylesheet" href="style_home.css">
 </head>
 <body>
 <?php   
        //  voiture disponible
        $sql1 = "SELECT  COUNT(*) AS L’eta
            FROM voiture
            WHERE `L’eta`='disponible'";
        $result1 = mysqli_query($conn,$sql1);
        $resultCheck1 =mysqli_fetch_assoc($result1);
        // voiture indisponible
        $sql2 = "SELECT  COUNT(*) AS L’eta
            FROM voiture
            WHERE `L’eta`='indisponible'";
        $result2 = mysqli_query($conn,$sql2);
        $resultCheck2 =mysqli_fetch_assoc($result2);

        //  le nombre de client
        $sql3 = "SELECT  COUNT(*) AS Nclient
        FROM `client`";
        $result3 = mysqli_query($conn,$sql3);
        $resultCheck3 =mysqli_fetch_assoc($result3);

        // le nombre de reservation
        $sql4 = "SELECT  COUNT(*) NRESERV
        FROM reservation";
        $result4 = mysqli_query($conn,$sql4);
        $resultCheck4 =mysqli_fetch_assoc($result4);

        //  le nombre de reparation
        $sql5 = "SELECT COUNT(*) AS Nrepar
        FROM `réparation` ";
        $result5 = mysqli_query($conn,$sql5);
        $resultCheck5 =mysqli_fetch_assoc($result5);

    ?>
<div class="continar">
    <div class="section">
        <label for="">voiture indisponible</label><span><?php echo $resultCheck1['L’eta'] ; ?></span>
    </div>
    <div class="section">
        <label for="">voiture disponible</label><span><?php echo $resultCheck2['L’eta']; ?></span>
    </div>
    <div class="section">
        <label for="">nombre Client</label><span><?php echo $resultCheck3['Nclient']; ?></span>
    </div>
    <div class="section">
        <label for="">Reservations</label><span><?php echo $resultCheck4['NRESERV']; ?></span>
    </div>
    <div class="section">
        <label for="">Repartion list</label><span><?php echo $resultCheck5['Nrepar']; ?></span>
    </div>
</div> 
 </body>
 </html>
 <?php
    include "NavBar.php";
?> 