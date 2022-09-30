<?php

$conn = new mysqli('localhost', 'root','','canteen');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$card_number = $_POST['card_number'];
$password = $_POST['password'];


$query="select * from  users where email='$card_number' and password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
echo('true');
}
else{
echo('false');
}





?>