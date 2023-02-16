<?php 
 
$user = 'root'; 
$password = ''; 
$database = 'book_db'; 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user, 
                $password, $database); 
  
 

if ($mysqli->connect_error) { 
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error); 
} 
  
 session_start();
 
$sql = "SELECT * FROM book_form "; 
$result = $mysqli->query($sql); 



if (!isset($_SESSION['usname'])) {
  header("Location:home.php");
}
?> 
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
 
 
 
<?php    

                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
<div class="modal modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour" style="overflow-y: hidden; height:1000px"> 
  <div class="modal-dialog" role="document"> 
    <div class="modal-content rounded-4 shadow"> 
      <div class="modal-body p-5"> 
        <h2 class="fw-bold mb-0">reservations</h2> 
 
        <ul class="d-grid gap-4 my-5 list-unstyled"> 
          <li class="d-flex gap-4"> 
            <svg class="bi text-muted flex-shrink-0" width="48" height="48"><use xlink:href="#grid-fill"/></svg> 
            <div> 
              <h5 class="mb-0">Numero de reservation</h5> 
              <?php echo "#".rand(); ?> 
            </div> 
          </li> 
          <li class="d-flex gap-4"> 
            <div hidden><?php echo $rows['id'];
            ?></div>

            <svg class="bi text-muted flex-shrink-0" width="48" height="48"><use xlink:href="#grid-fill"/></svg> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"> 
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/> 
            </svg> 
            <div> 
              <h5 class="mb-0">Nom</h5> 
              <?php echo $rows['name']; ?> 
            </div> 
          </li> 
          <li class="d-flex gap-4"> 
            <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"> 
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/> 
            </svg> 
            <div> 
              <h5 class="mb-0">Email</h5> 
              <?php echo $rows['email']; ?> 
            </div> 
          </li> 
          <li class="d-flex gap-4"> 
            <svg class="bi text-primary flex-shrink-0" width="48" height="48"><use xlink:href="#film"/></svg> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16"> 
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg> 
            <div> 
              <h5 class="mb-0">N TELEPHONE</h5> 
              <?php echo $rows['phone']; ?> 
            </div> 
          </li> 
          <li class="d-flex gap-4"> 
            <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"> 
              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> 
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/> 
            </svg> 
            <div> 
              <h5 class="mb-0">Adress</h5> 
              <?php echo $rows['adress']; ?> 
            </div> 
          </li> 
          <li class="d-flex gap-4"> 
            <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-symmetry-horizontal" viewBox="0 0 16 16"> 
              <path d="M13.5 7a.5.5 0 0 0 .24-.939l-11-6A.5.5 0 0 0 2 .5v6a.5.5 0 0 0 .5.5h11zm.485 2.376a.5.5 0 0 1-.246.563l-11 6A.5.5 0 0 1 2 15.5v-6a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .485.376zM11.539 10H3v4.658L11.54 10z"/> 
            </svg> 
            <div> 
              <h5 class="mb-0">Destination</h5> 
              <?php echo $rows['location']; ?> 
            </div> 
          </li> 
          <li class="d-flex gap-4"> 
            <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16"> 
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/> 
            </svg> 
            <div> 
              <h5 class="mb-0">Nombre de personne</h5> 
              <?php echo $rows['guests'];?> 
            </div> 
          </li> 
          <li class="d-flex gap-4"> 
            <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16"> 
            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/> 
            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/> 
            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/> 
            </svg> 
            <div> 
              <h5 class="mb-0">Duree</h5> 
              <?php echo "DU ".$rows['arrivals']." AU ".$rows['leaving'];?> 
            </div> 
          </li> 
        </ul> 
        <button type="button" class="btn btn-outline-danger m-3" data-toggle="modal" data-target="#exampleModal">supprimer reservation</button>
      <a href="mailto:<?php echo $rows['email']?>"><button type="button" class="btn btn-outline-success"  >valider reservation</button></a>   
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              Êtes-vous sûr de vouloir supprimer cette resérvation ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>          
                <a href="results.php" class="btn btn-danger" type="submit" name="" >supprimer</a>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div> 
  </div> 
</div> 
<?php  
                } 
             ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>