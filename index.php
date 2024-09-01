<?php
$conn = mysqli_connect("localhost", "root", "", "junior");
if (!$conn) {
  die("no connection");
}
// echo "success";

$query = "SELECT * FROM users";

$result = $conn->query($query);

$users = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($users);

?>
