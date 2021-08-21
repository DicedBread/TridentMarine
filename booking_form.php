<?php
// print_r($_POST);
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$course = $_POST["course"];

include('setup.php');

$sql = "INSERT INTO students (first_name, last_name, email, phone, age)
VALUES ('$first_name', '$last_name', '$email', '$phone', '$age')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql = "INSERT INTO enrolments (course_id, student_id)
VALUES ('$course', '$last_id')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>





