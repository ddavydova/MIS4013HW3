
<!DOCTYPE html>
<html>
<head> <?php include("header.php");?></head>
<body>

<?php include("links.php");?>
<br>
<br>
 <h1>Courses</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Customer ID</th>
      <th>Customer's First Name</th>
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

$sql = "SELECT * from Customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["customer_id"]?></td>
    <td><?=$row["fname"]?></td>
    <td><?=$row["lname"]?></td>
    <td>
      <form method="post" action="page3.php">
        <input type="hidden" name="id" value="<?=$row["customer_id"]?>" />
        <input type="submit" value="Sections" />
      </form>
    </td>
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
