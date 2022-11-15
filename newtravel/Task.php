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
$n5=$_POST["www"];
$n1=$_POST["i"];
$n2=$_POST["j"];
$n3=$_POST["k"];
$n4=$_POST["l"];

/*$sw1 = $_POST['m1'];
$sw2 = $_POST['m2'];
$sw3 = $_POST['m3'];
$sw4 = $_POST['m4'];
$sw5 = $_POST['m5'];
$sw6 = $_POST['m6'];
// $e =""*/

  if(empty($_POST['m1'])){
    $sw1="";
    }
    else{
    $sw1= $_POST['m1'];
    }

  if(empty($_POST['m2'])){
      $sw2="";
      }
      else{
      $sw2= $_POST['m2'];
      }

  if(empty($_POST['m3'])){
    $sw3="";
      }
      else{
      $sw3= $_POST['m3'];
      }
      
      if(empty($_POST['m4'])){
        $sw4="";
        }
        else{
        $sw4= $_POST['m4'];
        }

        if(empty($_POST['m5'])){
          $sw5="";
          }
          else{
          $sw5= $_POST['m5'];
          }
          if(empty($_POST['m6'])){
            $sw6="";
            }
            else{
            $sw6= $_POST['m6'];
            }

/*$sw1 = $_POST['n1'];
$sw2 = $_POST['n2'];
$sw3 = $_POST['n3'];
$sw4 = $_POST['n4'];
$f ="";*/

$e =$sw1." ".$sw2." ".$sw3." ".$sw4." ".$sw5." ".$sw6." ";



if(empty($_POST['n1'])){
  $sw1="";
  }
  else{
  $sw1= $_POST['n1'];
  }

  if(empty($_POST['n2'])){
  $sw2="";
  }
  else{
  $sw2= $_POST['n2'];
  }

  if(empty($_POST['n3'])){
    $sw3="";
    }
    else{
    $sw3= $_POST['n3'];
    }
  
if(empty($_POST['n4'])){
  $sw4="";
   }
  else{
  $sw4= $_POST['n4'];
  }

  if(empty($_POST['n5'])){
    $sw5="";
     }
    else{
    $sw5= $_POST['n5'];
    }
    
  $f =$sw1." ".$sw2." ".$sw3." ".$sw4." ".$sw5."";
/*if(!empty($sw1))
{
$f = "$sw1";
}
if(!empty($sw2))
{
$f = " $f / $sw2";
}
if(!empty($sw3))
{
$f = " $f /$sw3";
}
if(!empty($sw4))
{
$f = " $f /$sw4";
}*/

/*$n7=$_POST["o"];*/
if(empty($_POST['o'])){
  $n7="";
   }
  else{
  $n7= $_POST['o'];
  }

$n8=$_POST["p"];
 
$sql = "INSERT INTO `traval`(NIC,TravalDate,Destination,RealisticBudget,Airport,TypeOfTrip,OtherServiceNeeded,AgentRetainerFee,Quantity)
VALUES ('$n5','$n1', '$n2','$n3','$n4','$e','$f','$n7','$n8')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT NIC,TravalDate,Destination,RealisticBudget,Airport,TypeOfTrip,OtherServiceNeeded,AgentRetainerFee,Quantity FROM traval";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "NIC:" .$row["NIC"]."<br>";
    echo "TravalDate:" .$row["TravalDate"]."<br>";
    echo "Destination:" .$row["Destination"]."<br>";
    echo "RealisticBudget:" .$row["RealisticBudget"]."<br>";
    echo "Airport:" .$row["Airport"]."<br>";
    echo "TypeOfTrip:" .$row["TypeOfTrip"]."<br>";
    echo "OtherServiceNeeded:" .$row["OtherServiceNeeded"]."<br>";
    echo "AgentRetainerFee:" .$row["AgentRetainerFee"]."<br>";
    echo "Quantity:" .$row["Quantity"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
