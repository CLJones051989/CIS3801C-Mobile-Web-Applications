<!DOCTYPE html>
<html>

<head>
  <title>Bearded Browncoat Games</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

<div id="header">
  <div> <img src="images/Bearded-Browncoat-Comics-Games-Logo.jpg" alt="Bearded Browncoat Games"> </div>
  <div id="top-nav">
    <div class="nav-btn"> Home </div>
    <div class="nav-btn"> About </div>
    <div class="nav-btn"> Products </div>
    <div class="nav-btn"> Events </div>
    <div class="nav-btn"> Directions </div>
  </div>
</div>

<div id="main-container">
  <div id="left-column">
    <div id="left-nav">
      <div class="left-nav-btn">Left 1</div>
      <div class="left-nav-btn">Left 2</div>
      <div class="left-nav-btn">Left 3</div>
      <div class="left-nav-btn">Left 4</div>
    </div>
  </div>

  <div id="main-content">
    <div id="content-text">This is the homepage.</div>
    <img src="images/MTG.jpg" alt="Magic the Gathering" >
    <img src="images/InfinityGauntlet.jpg" alt="The Infinity Gauntlet" >
    <img src="images/boardgames.jpg" alt="Board Games">
    <div id="content-text">


      <?php
      include 'products.php';
      include 'openproductsdb.php';

      $sql= "SELECT ProductName, Quantity, producttype, Price FROM products LIMIT 10";
      $result = mysqli_query($conn, $sql);

      echo "<div id='label-row'><div class='label'>Product Name</div><div class='label'>Quantity</div><div class='label'>Product Type</div><div class='label'>Price</div><div>";

      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
          echo "<div class='info-row'><div class='info'>" . $row["ProductName"] . "</div><div class='info'> " . $row["Quantity"] . "</div><div class='info'> " . $row["producttype"] . "</div><div class='info'> " . $row["Price"] . "</div></div>";
        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);
       ?>

    </div>
  </div>
  <div id="right-column">  </div>
</div>

<div id="footer">
  <div id="footer-text">This is the footer. </div>
</div>

</body>


</html>
