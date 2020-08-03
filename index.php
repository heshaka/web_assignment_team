<?php
require_once 'core/core.php';
include 'includes/header.php';
include 'includes/navigation.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <style>
        body 
        {
          margin: 0;
          padding: 0;   
          font-family: Arial, Helvetica, sans-serif;
          font-size: 16px;
          text-align: center;
          background-image: url("images/6.jpg");
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size:cover;
        }

        .container
        {
          background: rgba(44,62,80,0.4);
          width:1000px;
          color: white;
        }

    </style>
</head>
<body>
 
  <section>
  <div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides" src="images/slide11.jpg" style="width:100%">
  <img class="mySlides" src="images/slide22.jpg" style="width:100%">
  <img class="mySlides" src="images/slide33.jpg" style="width:100%">
  <img class="mySlides" src="images/slide44.jpg" style="width:100%">
  <img class="mySlides" src="images/slide55.jpg" style="width:100%">
  <img class="mySlides" src="images/slide66.jpg" style="width:100%">


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
</div>
</section>
<br><br><br>



<section class="py-5">
      <div class="container">
        <h1><b>Rooms</b></h1><hr />
      <div class="row">
<?php 
  $sql = $db->query("SELECT * FROM rooms");
  while($room=mysqli_fetch_assoc($sql)):
  ?>
  <div class="col-lg-4 col-md-4 col-sm-6">
       <h3 class="text-center"><b><?=$room['type'];?></b></h3>
      <img src="<?=$room['image'];?>" class="img-responsive" alt="room" width="100%" height="200px"><br><br>
      <section class="text-justify">
      <p>
      <?=$room['details'];?>
      </p>
      <a href="2room_details.php?room_id=<?php echo $room['room_id']; ?>" class="btn btn-block btn-primary">More Details</a><br><br>
      </section>
    </div>
  <?php endwhile; ?>
      
      </div>
    </div>
    </section>
    <br><br>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
