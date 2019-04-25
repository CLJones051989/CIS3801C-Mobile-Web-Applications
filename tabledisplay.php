<?php
include 'php/openproductsdb.php';

$sql= "SELECT ProductName, Quantity, producttype, Price FROM products LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
    echo "ProductName: " . $row["ProductName"] . "<br>";
    echo "Quantity: " . $row["Quantity"] . "<br>";
    echo "producttype: " . $row["producttype"] . "<br>";
    echo "Price: " . $row["Price"] . "<br>";
  }
} else {
  echo "0 results"
}

mysqli_close($conn);
 ?>
