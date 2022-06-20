<?php 
    include "Connexion.php";
    session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="style_LOGIN.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="LOGIN.php" method="POST">
        <div class="field">
          <input type="text" name="CIN" required>
          <label>CIN</label>
        </div>
        <div class="field">
          <input type="password" name="passowrd" required>
          <label>Password</label>
        </div>
        <!-- <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div> -->
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
        <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
      </form>
      <?php 
        if (isset($_POST['submit'])) {
          $cin = $_POST['CIN'];
          $password = $_POST['passowrd'];
        
          $sql = "SELECT * FROM utilisateur WHERE CIN_Uti ='" . $cin . "' AND  MOT_DE_PASS ='" . $password . "'" ;
        
          $result = mysqli_query($conn, $sql);
          $row_assoc=$result->fetch_assoc();
          if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION["admin"] = $row_assoc['CIN_Uti'];
            $_SESSION["fname"] = $row_assoc['Prénom'];
            header("location:home.php");
          } else {
            echo "<script> alert ('your email adress or password is not correct')</script>";
          }
        
        } 
        
    ?>
    </div>
  </body>
</html>
