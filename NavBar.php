<?php 
    include "Connexion.php";
    session_start();
?>
 <link rel="stylesheet" href="style_navbar.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
 
<div>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                <h2 class="name"><?php 
// if(isset($_SESSION["fname"]))
                                    echo $_SESSION["fname"]; ?></h2>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <!-- <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li> -->

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="HOME.php">
                            <i class='icon' ><img src="photo/HOME.png" class="icon-N"></i>
                            <span class="text nav-text">HOME</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="CLIENTS.php">
                            <i class='icon' ><img src="photo/client.png" class="icon-N"></i>
                            <span class="text nav-text">Nos Clients</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Voiture.php">
                            <i class='icon'><img src="photo/car.png" class="icon-N"></i>
                            <span class="text nav-text">Nos Voiture</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Reservation.php">
                        <i class='icon'><img src="photo/reservation.png" class="icon-N"></i>
                            <span class="text nav-text">Reservation</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Ajouter-Voiture.php">
                        <i class='icon'><img src="photo/add_car.png" class="icon-N"></i>
                            <span class="text nav-text">Ajouter Un Voiture</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Reparable.php">
                        <i class='icon'><img src="photo/reparation.png" class="icon-N"></i>
                            <span class="text nav-text">Reparable</span>
                        </a>
                    </li>
                    <?php
                        if(isset($_SESSION["admin"]))
                        {
                            $sql = "SELECT * FROM utilisateur WHERE CIN_Uti='".$_SESSION["admin"]."' " ;
                            $result = mysqli_query($conn, $sql);
                            $row_assoc=$result->fetch_assoc();
                            // echo $row_assoc["Rôle"]. "dfjfskjdffdskjhfjhsfdkhfsd";
                            if($row_assoc["Rôle"] == "ADMIN"){
                                ?>
                                <li class="nav-link">
                                    <a href="add_user.php">
                                    <i class='icon'><img src="photo/add_user.png" class="icon-N"></i>
                                        <span class="text nav-text">ajouter utilisatuer</span>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                    ?>
                        
                   

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                <form method="POST"action="NavBar.php">
                    <a href="#">
                    <button class="btn-logout" type="submit" name="logout"><i class='bx bx-log-out icon' ></i></button>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <?php
                if (isset($_POST["logout"])) {     
                    session_destroy();
                      header("location:login.php");
                }
                ?>
                <!-- <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li> -->
                
            </div>
        </div>

    </nav>

    <!-- <section class="home">
        <div class="text">Dashboard Sidebar</div>
    </section> -->
</div>
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

// modeSwitch.addEventListener("click" , () =>{
//     body.classList.toggle("dark");
    
//     if(body.classList.contains("dark")){
//         modeText.innerText = "Light mode";
//     }else{
//         modeText.innerText = "Dark mode";
        
//     }
// });
    </script>


