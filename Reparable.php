<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="style_reservation.css"> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <h2 class="titre">Les Réparable</h2>
    <div class="ajouter">
        <a href="Ajouter-Reparable.php"><button class="btn-ajouter">Ajouter Réparable</button>  </a>
    </div>
    <div class="search-box-s">
        <input type="text" placeholder="search....">
        <a href="#" class="icon-s">
            <i class="fas fa-search"></i>
        </a>
    </div>
    <div>
        <table id="table_index" class="table table-dark table-striped">
                    <tr>
                        <th>Matricule</th>
                        <th>Date réparation</th>
                        <th>Date fin réparation</th>
                        <th>Probleme</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>40-B-12345</td>
                        <td>20/05/2022</td>
                        <td>30/05/2022</td>
                        <td>mécanique</td>
                    </tr>
                    <tr>
                        <td>40-B-12345</td>
                        <td>20/05/2022</td>
                        <td>30/05/2022</td>
                        <td>mécanique</td>
                    </tr>
                    <tr>
                        <td>40-B-12345</td>
                        <td>20/05/2022</td>
                        <td>30/05/2022</td>
                        <td>mécanique</td> 
                    </tr>
                    
        </table>
    </div>
</body>
</html>  
<?php
    include "NavBar.php";
?> 