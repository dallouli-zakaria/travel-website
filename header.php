<?php 
include 'loginn/config.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GuideMa</title>
   <link rel="shortcut icon" href="images/logo1.png">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="header">
   <div>
   <?php if(isset($_SESSION['username'])){
   ?>
      <a href="profile.php" style="color:black;padding-right:10px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="text-decoration:none;">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
      </a>
<?php
            echo  '<a href="#" class="logo">Bonjour, '.$_SESSION['username'].'</a>' ;
         }else{
            echo '<a href="home.php" class="logo">GuideMa</a>';
         }
         ?>
   </div>

   <nav class="navbar">
      <a href="home.php" style="text-decoration:none">acceuil</a>
      <a href="about.php" style="text-decoration:none">concernant</a>
      <a href="package.php" style="text-decoration:none">Voyages</a>
      <a href="book.php" style="text-decoration:none">reserver</a>
      <?php if (isset($_SESSION['username'])) {
        echo '<a href="loginn/logout.php" style="text-decoration:none">deconnexion</a>';

}else{
   echo '<a href="loginn/index.php" style="text-decoration:none">Se connecter</a>';
}
?>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>