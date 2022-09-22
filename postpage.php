<!DOCTYPE html>
<html>
<head> <?php include("header.php");?></head>
  <body>
    <h1>Orders</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Order ID</th>
      <th>Product Name</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "davyddov_davyddova";
$password = "dasha12345!";
$dbname = "davyddov_HW3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$cid = $_POST['id'];
//echo $iid;
$sql = "select order_id, o.quantity, c.customer_id, p.pname from Customer c join Orders o on c.customer_id = o.customer_id join Product p on p.product_id= o.product_id where c.customer_id=" . $cid;
//echo $sql;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["order_id"]?></td>
    <td><?=$row["pname"]?></td>
    <td><?=$row["quantity"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    <?php include("footer.php");?>
  </body>
</html>
