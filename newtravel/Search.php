
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";

// Create connection
$conn = new mysqli( $servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$z=$_POST['seh'];

$sql = "SELECT NIC,TravalDate,Destination,RealisticBudget,Airport,TypeOfTrip,OtherServiceNeeded,AgentRetainerFee,Quantity 
FROM traval where NIC='$z'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $n0=$row['NIC']; 
   $n1=$row['TravalDate'];
   $n2=$row['Destination'];
   $n3=$row['RealisticBudget'];
   $n4=$row['Airport'];
   $n5=$row['TypeOfTrip'];
   $n6=$row['OtherServiceNeeded'];
   $n7=$row['AgentRetainerFee'];
   $n8=$row['Quantity'];
  }

} else {
  echo "0 results";
} 
          

$conn->close();

?>



<div>
  
<form action ="Delete.php" method="post">
<label>NIC:</label> <input type='number' name='www' value='<?php echo "$n0" ?>'><br><br>
<label>Travel Date:</label> <input type='date' name='i' value='<?php echo "$n1" ?>'><br><br>
<label>Destination:</label> <input type='text' name='j' value='<?php echo "$n2" ?>'><br><br>
<label>RealisticBudget:</label> <input type='text' name='k' value='<?php echo "$n3" ?>'><br><br>
<label>LeaveFrom:</label> <input type='text' name='l' value='<?php echo "$n4" ?>'><br><br>
<label>TypeOfTrip:</label> <input type='text' name='m' value='<?php echo "$n5" ?>'><br><br>
<label>OtherServicesNeeded:</label> <input type='text' name='n' value='<?php echo "$n6" ?>'><br><br>
<label>RetainerFee:</label> <input type='text' name='o' value='<?php echo "$n7" ?>'><br><br>
<label>Quantity:</label> <input type='text' name='P' value='<?php echo "$n8" ?>'><br><br>
<button type="submit" name="delete">Delete</button>

</form>

<form action ="Update.php" method="post">
<label>NIC:</label> <input type='number' name='www' value='<?php echo "$n0" ?>'><br><br>
<label>Travel Date:</label> <input type='date' name='i' value='<?php echo "$n1" ?>'><br><br>
<label>Destination:</label> <input type='text' name='j' value='<?php echo "$n2" ?>'><br><br>
<label>RealisticBudget:</label> <input type='text' name='k' value='<?php echo "$n3" ?>'><br><br>
<label>LeaveFrom:</label> <input type='text' name='l' value='<?php echo "$n4" ?>'><br><br>
<label>TypeOfTrip:</label> <input type='text' name='m' value='<?php echo "$n5" ?>'><br><br>
<label>OtherServicesNeeded:</label> <input type='text' name='n' value='<?php echo "$n6" ?>'><br><br>
<label>RetainerFee:</label> <input type='text' name='o' value='<?php echo "$n7" ?>'><br><br>
<label>Quantity:</label> <input type='text' name='P' value='<?php echo "$n8" ?>'><br><br>
<button type="submit" name="Update">Update</button>

</form>

</div>


</body>
</html>