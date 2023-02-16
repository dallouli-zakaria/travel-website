<?php include 'config2.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="profile/profile.css">
    <title>Document</title>
</head>
<body>
<div class="container">
     <div class="card">
     <div class="info">
               <h3 style="color:white;">Profile</h3>
     </div>
     <div class="forms">
          <div class="inputs"> 
              <span>Nom :</span> 
              <input type="text" readonly value=" <?php echo $_SESSION['username']; ?>"> 
    </div>
     <div class="inputs"> 
         <span>Email :</span>
          <input type="text" readonly value=" <?php echo $_SESSION['email']; ?>"> 
     </div>
     <div class="inputs"> 
         <span>Numéro de téléphone :</span> 
         <input type="text" readonly value=" <?php echo $_SESSION['tel']; ?>"> 
    </div>
    <div class="inputs"> 
         <span>Adresse :</span> 
         <input type="text" readonly value=" <?php echo $_SESSION['adresse']; ?>"> 
    </div>
 </div>
</div>
<script src="profile/profile.js"></script>
</body>
</html>