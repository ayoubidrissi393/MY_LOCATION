<?php 
    include "Connexion.php"
?>
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
    <h2 class="titre">Les reservations</h2>
    <div class="ajouter">
        <a href="AJOUTER-RESERVATION.php"><button class="btn-ajouter">AJOUTER RESERVATIONS</button>  </a>
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
        <table id="table_index" class="table table-dark table-striped">
                    <tr>
                        <th>CODE</th>
                        <th>DATE Reservations</th>
                        <th>DATE DEBUIT</th>
                        <th>DATE FIN</th>
                        <th>CIN Client</th>
                        <th>CIN Utilisatuer</th>
                        <th>MATRICULE VOITURE</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php 

                    // supprimer un element 
                    // if(isset($_REQUEST['ID'])) {
                    //     $id = $_REQUEST['ID'];
                    //     $sqlDelete = "DELETE FROM employe WHERE ID = '$id' ";
                    //     $conn->query($sqlDelete);
                    // header("Location: select.php");


                    if(isset($_GET['rn']))
                    {
                    $id = $_GET['rn'];
                    $query = "DELETE FROM reservation WHERE Code_Res='" . $id . "'";
                    $res = mysqli_query($conn, $query);
                    if($res) {
                    //  echo json_encode($res);
                    }
                    else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                    }
                    }
                    // recharger le donnes dans base donne 
                    $search = "";
                    if(isset($_POST['search-btn'])){
                        $search = $_POST['search'];
                    } 
                
                    $sql = "SELECT * 
                    FROM reservation
                    WHERE Code_Res  LIKE '%$search%' OR Matricule  LIKE '%$search%'   OR date_de_fin_Res LIKE '%$search%'";  
                    $result = mysqli_query($conn,$sql);
                    $resultCheck =mysqli_num_rows($result);

                    if($resultCheck >0){
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row["Code_Res"]."</td>";                        
                        echo "<td>".$row["date_de_Reservation"]."</td>";
                        echo "<td>".$row["Date_de_début_Res"]."</td>";
                        echo "<td>".$row["date_de_fin_Res"]."</td>";
                        echo "<td>".$row["CIN_Cli"]."</td>";
                        echo "<td>".$row["CIN_Uti"]."</td>";
                        echo "<td>".$row["Matricule"]."</td>";
                        echo "<td style='WIDTH: 5%;'><a href='MODIFIER-RESERVATION.php?ID=$row[Code_Res]'><img style='width:86%;' src=photo/modifier.png ></a></td>";
                        echo "<td style='WIDTH: 5%;'><a href='Reservation.php?rn=$row[Code_Res]' onClick=\"return confirm('confirmer le supression !!')\"><img src=photo/supprimer.png></a></td>";
                        echo "</tr>";
                    }
                    }
                    ?> 
        </table>
    </div>
</body>
</html>  
<?php
    include "NavBar.php";
?> 