<?php 
include 'config2.php';


if (!isset($_SESSION['username'])) {
    header("Location: loginn/register.php");
}

if(isset($_POST['submit'])){
   $name = $_POST['name']; 
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $adress = $_POST['adress'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   
   $sql = "INSERT INTO  book_form ( name ,  email ,  phone ,  adress ,  location ,  guests ,  arrivals ,  leaving ) VALUES ('$name', '$email', '$phone', '$adress', '$location', '$guests','$arrivals', '$leaving')";
   $result = mysqli_query($conn, $sql);


   $_SESSION['location']=$location;
   $_SESSION['guests']=$guests;
   $_SESSION['arrivals']=$arrivals;
   $_SESSION['leaving']=$leaving;

   

   

}
 
?>




<div class="heading" style="background:url(images/montagne.jpg) no-repeat">
   <h1>Bienvenue <?php echo  $_SESSION['username'] ; ?>. </h1>
</div>



<section class="booking">

   <h1 class="heading-title">Reserver dès maintenant !</h1>

   <form  method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nom :</span>
            <input type="text" placeholder="Entrer vote nom" name="name"  value="<?php echo $_SESSION['username']; ?>" readonly>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Entrer votre e-mail" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
         </div>
         <div class="inputBox">
            <span>adresse telephonique :</span>
            <input type="number" placeholder="Votre adresse telephonique" name="phone" value="<?php echo $_SESSION['tel']; ?>" readonly>
         </div>
         <div class="inputBox">
            <span>addresse locale :</span>
            <input type="text" placeholder="Enter your address" name="adress" value="<?php echo $_SESSION['adresse']; ?>" readonly>
         </div>
         <div class="inputBox">
            <span>Vers :</span>
            <input list="travels" name="location" id="browser" autocomplete="off" >
               <datalist id="travels"  >
               <?php
                  $sql2 = "select city from cities ";
                  $result2 = mysqli_query($conn, $sql2);
                    foreach($result2 as $tab2){
                        foreach($tab2 as $elmt2){
                        echo "<option value=".$elmt2.">".$elmt2."</option>";
                        }
                    }
                ?>
               </datalist>
         </div>
         <div class="inputBox">
            <span>Nbr de personnes :</span>
            <input type="number" placeholder="0" name="guests"required>
         </div>
         <div class="inputBox">
            <span>Départ :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>Retour :</span>
            <input type="date" name="leaving" required>
         </div>
      </div>
      <input type="submit" value="Envoyer" class="btn" name="submit"  >
   </form>
</section>



<?php 
include 'footer.php'
?>