<?php
//koneksi ke dalam data base 
$servername = "localhost";
$username = "root";
$password = "";
//nama table database
$dbname = "test";

// melakukan
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// --------------------------------
// Menapilkan data dari table
// --------------------------------
// $sql = "SELECT id, username, pesanan FROM komentar";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["pesanan"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// --------------------------------
// Memasukan data ke dalam table
// --------------------------------

// $user = "Derry";

// $sql = "INSERT INTO komentar (username, pesanan)
// VALUES ('$user', 'Makanan Baru 10 biji')";

// if ($conn->query($sql) === TRUE) {
//   $last_id = $conn->insert_id;
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
?>