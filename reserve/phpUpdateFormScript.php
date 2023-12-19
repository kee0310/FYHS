<?php

$student_id = $_POST["student_id"];
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];

$servername = "localhost";
$username = "bob";
$password = "123456";
$db = "classDB";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "update students set name='$name', age='$age', gender='$gender' where student_id='$student_id'";

if ($conn->query($sql) === TRUE) {
  echo "Records updated: " . $student_id . "-" . $name . "-" . $age . "-" . $gender;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>