<!DOCTYPE html>
<html>
<head> <?php include("header.php");?></head>
<body>

<?php include("links.php");?>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Order ID</th>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Customer's Last Name</th>
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
 $iid = $_GET['id'];
$sql = "select o.quantity, o.product_id, order_id, p.pname, c.lname from order o join customer c on o.customer_id = c.customer_id join product p on p.product_id = o.product_id where c.customer_id=" . $iid;
//echo $sql;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["order_id"]?></td>
    <td><?=$row["product_id"]?></td>
    <td><?=$row["pname"]?></td>
    <td><?=$row["quantity"]?></td>
    <td><?=$row["lname"]?></td>
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
