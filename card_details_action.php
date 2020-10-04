<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "okay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $card_holder=$_POST['card_holder'];
    $card_number=$_POST['card_number'];
    $cvv=$_POST['cvv'];
     $exp_month=$_POST['exp_month'];
   

$sql = "INSERT INTO card_details (card_holder,card_number,cvv,exp_month)
VALUES ('$card_holder', '$card_number', '$cvv' ,'$exp_month')";

if ($conn->query($sql) === TRUE) {
  header("location: payment_verify.html");


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>