<?php require "session.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title>TetraFree | Tetra-Market</title>
  <link rel="stylesheet" href="style/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Recycling TetraPack cartons into finished products">
  <meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
</head>
<body>

  <?php require "head.php" ?>
 
    <div id='section'>
      <div class="centeralign">
      <h1>TETRA-MARKET</h1>
      <h2>Endorse The Change</h2>
    </div>
    <div>  </div>

    <div class="row">
      
      <!-- <button onclick="sfunction()" class="btnbtn"> -->
        <div class="marimg">
          <button id="bookbtn" class="btnbtn">
            <img src="images/books.jpg" alt="Books">
          </button>
            <h3>Books</h3>    
        </div>

      <div class="marimg">
        <button id="benchbtn" class="btnbtn">
          <img src="images/benches.jpg" alt="Benches">
        </button>
        <h3>Benches</h3>
      </div>

      <div class="marimg">
        <button id="roofbtn" class="btnbtn">
          <img src="images/roofs.jpg" alt="Roof">
        </button>
        <h3>Roofs</h3>
      </div>

      </div>
    </div>

  <!-- Books Modal -->
  <div class="container1" id="bookQuant">
    <div class="register">
      <span class="close" id="close_btn18">&times;</span>
      <h2>Availability</h2>
      <?php
        require_once "cred.php";

        $query = "select sum(prod_quantity) as prod_sum from product where prod_type='books'";
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            echo "<p>".$row['prod_sum']." books in stock!</p>";
          }
        }
        else{
          echo "Sorry, The product you requested for is Unavailable!";
        }

        if(isset($_SESSION['uid'])){
            if($_SESSION['role']=="ngo"){
              echo "<button onclick='ordBooks();'>Order Books</button>";
            }            
        }

      ?>

      <div id="bookForm"></div>
      
    </div>
  </div>

  <!-- Benches Modal -->
  <div class="container1" id="benchQuant">
    <div class="register">
      <span class="close" id="close_btn19">&times;</span>
      <h2>Availability</h2>
      <?php
        require_once "cred.php";

        $query = "select sum(prod_quantity) as prod_sum from product where prod_type='benches'";
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            echo "<p>".$row['prod_sum']." benches in stock!</p>";
          }
        }
        else{
          echo "Sorry, The product you requested for is Unavailable!";
        }

        if(isset($_SESSION['uid'])){
            if($_SESSION['role']=="ngo"){
              echo "<button onclick='ordBenches();'>Order Benches</button>";
            }
        }

      ?>

      <div id="benchForm"></div>

    </div>
  </div>

  <!-- Roofs Modal -->
  <div class="container1" id="roofQuant">
    <div class="register">
      <span class="close" id="close_btn20">&times;</span>
      <h2>Availability</h2>
      <?php
        require_once "cred.php";

        $query = "select sum(prod_quantity) as prod_sum from product where prod_type='roofs'";
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            echo "<p>".$row['prod_sum']." roofs in stock!</p>";
          }
        }
        else{
          echo "Sorry, The product you requested for is Unavailable!";
        }

         if(isset($_SESSION['uid'])){
            if($_SESSION['role']=="ngo"){
              echo "<button onclick='ordRoofs();'>Order Roofs</button>";
            }
        }

      ?>

      <div id="roofForm"></div>

    </div>
  </div>

  <?php require "foot.php" ?>
  
<script src="scripts/script.js" type="text/javascript"></script>
<script src="scripts/market.js" type="text/javascript"></script>

</body>
</html>

