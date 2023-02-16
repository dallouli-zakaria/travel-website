<?php
  include('header.php');

?>
<section class="home">
   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/desert-morocco-motorcycle-guided-tour.jpg) no-repeat">
            <div class="content">
               <h3>GuideMa</h3>
               <span>vote guide à vos côtés </span>
               <a href="package.php" class="btn">s'avoir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/dakhla.jpeg) no-repeat">
            <div class="content">
               <span>Explorer, Decouvrir, Voyager</span>
               <h3>Decouvrir les merveilles du Maroc</h3>
               <a href="package.php" class="btn">s'avoir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/imagesaharaguide.jpeg) no-repeat">
            <div class="content">
               <span>Explorer, Decouvrir, Voyager</span>
               <h3>Passer l'une des meilleurs aventures</h3>
               <a href="package.php" class="btn">s'avoir plus</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>


<section class="services">

   <h1 class="heading-title"> Nos services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>aventures</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>nombreuses destinations</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>feu de camp</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off-road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>


<section class="home-about">

   <div class="image">
      <img src="images/marocmap.gif" alt="">
   </div>

   <div class="content">
      <h3>GuideMa</h3>
      <p>Le Maroc, pays d'Afrique du Nord sur le littoral de l'Atlantique et de la Méditerranée, se distingue par ses influences berbères, arabes et européennes. La médina de Marrakech, quartier médiéval aux allures de labyrinthe, est un lieu animé, avec sa place Jemaa el-Fna et ses souks (marchés) vendant des céramiques, des bijoux et des lanternes en métal. La casbah des Oudayas à Rabat, la capitale, est un fort royal du XIIe siècle qui surplombe l'océan.</p>
      <a href="about.php" class="btn">s'avoir plus</a>
   </div>

</section>



<section class="home-packages">

   <h1 class="heading-title">Meilleurs destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/marrakech.jpg" alt="">
         </div>
         <div class="content">
            <h3>Marrakech Tour</h3>
            <p>Marrakech, ancienne cité impériale de l'ouest du Maroc, et un centre économique majeur abritant des mosquées, des palais et des jardins.</p>
            <a href="book.php" class="btn">Reserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ifrane.jpg" alt="">
         </div>
         <div class="content">
            <h3>ifrane tour</h3>
            <p>Ifrane est une ville installée dans les montagnes du Moyen Atlas au Maroc. Elle est réputée pour son architecture de style alpin et ses pistes de ski et forêts voisines.</p>
            <a href="book.php" class="btn">Reserver</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/dakhla.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dakhla tour</h3>
            <p>Dakhla est un petit bout de paradis au sud du Maroc, perdu entre les eaux de l'Atlantique et les sables du Sahara. S'y trouver est un délice à consommer sans modération.</p>
            <a href="book.php" class="btn">Reserver</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Voir plus +</a> </div>

</section>






<?php
include('footer.php')
?>