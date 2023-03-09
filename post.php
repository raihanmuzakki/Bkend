<?php

require_once('connect.php');

//test apakah data masuk
echo $_GET['name'];

$user = $_REQUEST['name'];
$pesan = $_REQUEST['message'];

$sql = "INSERT INTO komentar (username, pesanan)
VALUES ('$user', '$pesan')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>