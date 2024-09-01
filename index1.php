<?php
$conn = mysqli_connect("localhost", "root", "", "s");
if (!$conn) {
  die("no connection");
}
// echo "success";

$query = "SELECT * FROM users";

$result = $conn->query($query);

$users = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <form action="delete.php " method="POST">
        <input type="button" name="id" value="<?php $row['id'] ?>">;
        <th><input type="submit" name="delete" class="btn btn-danger">Delete</th>
    

</head>
<body>
    
</body>
</html>