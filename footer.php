<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


<div class="display-4">
<br>
<?php
date_default_timezone_set("America/Chicago");
echo "The time is " . date("h:i:sa");
?>
  
 <br>
<?php
$d1=strtotime("December 25");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until Christmas!";
?>
  
</div>
