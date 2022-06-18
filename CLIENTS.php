<?php 
    include "Connexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="style_Client.css"> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <h2 class="titre">LES CLIENT</h2>
    <div class="ajouter">
       <a href="Ajouter-Clients.php"> <button class="btn-ajouter">AJOUTER UN CLIENT</button>  </a>
    </div>
  
    <form  method="POST">
        <div class="search-box-s">
            <input type="text" placeholder="search...."  name="search">
            <button name="search-btn" class="icon-s">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </from>
    <div>
        <?php
      
        ?>
        <table id="table_index" class="table table-dark table-striped">
                    <tr>
                        <th>CIN</th>
                        <th>PRENOM</th>
                        <th>NOM</th>
                        <th>N° PERMIE</th>
                        <th>TELEPHONE</th>
                        <th>ADRESSE</th>
                        <th></th>
                        <th></th>
                    </tr>
        <?php 

             if(isset($_GET['rn']))
             {
             $id = $_GET['rn'];
             $query = "DELETE FROM client WHERE CIN_Cli='" . $id . "'";
             $res = mysqli_query($conn, $query);
             if($res) {
            //  echo json_encode($res);
             }
              else {
             echo "Error: " . $sql . "" . mysqli_error($conn);
             }
            }
          
            $search = "";
            if(isset($_POST['search-btn'])){
                $search = $_POST['search'];
            } 
                
                $sql = "SELECT * 
                FROM client
                 WHERE CIN_Cli LIKE '%$search%' OR Prénom LIKE '%$search%'   OR Nom LIKE '%$search%'";  
                 $result = mysqli_query($conn,$sql);
                 $resultCheck =mysqli_num_rows($result);

                if($resultCheck >0){
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$row["CIN_Cli"]."</td>";
                echo "<td>".$row["Prénom"]."</td>";
                echo "<td>".$row["Nom"]."</td>";
                echo "<td>".$row["Numéro_De_Permis"]."</td>";
                echo "<td>".$row["Téléphone"]."</td>";
                echo "<td>".$row["Adresse"]."</td>";
                echo "<td style='WIDTH: 5%;'><a href='modifier-Clients.php?ID=$row[CIN_Cli]'><img class='img-modifier' src=photo/modifier.png ></a></td>";
                echo "<td style='WIDTH: 5%;'><a href='CLIENTS.php?rn=$row[CIN_Cli]' onClick=\"return confirm('confirmer le supression !!')\"><img src=photo/supprimer.png></a></td>";
                echo "</tr>";
            }
        }
              
            
        //      else
        //      {
             
        // // recharger le donnes dans base donne 
        //         $sql = "SELECT * FROM `client`";
        //         $result = mysqli_query($conn, $sql);
                
    // }
        ?> 
        </table>
    </div>
</body>
</html>  
<?php
    include "NavBar.php";
?> 