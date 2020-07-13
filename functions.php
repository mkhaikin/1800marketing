<?php
$servername = "localhost";
$username = "1800form";
$password = "123456";

try {
  $conn = new PDO("mysql:host=$servername;dbname=1800", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO leads (email, message, date)
  VALUES ('John@mail.com', 'string 123 hello', now())";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>