<?php
    include('includes/header.php');
    // session_start();
    print_r($_SESSION);
    print_r($_GET);

    // if (isset($_SESSION['loggedin'])){
    //     $userId = $_SESSION['id']; 
    //     echo "date " . $_GET['bookingDate'] . " for " . $_GET['courseId'] . " id " . $userId;    
    // }
    
    $selectedDate = $_GET['bookingDate'];
    $course_date_id = $_GET['course_date_id'];
    $studentId = $_SESSION['student_id'];

    $sql = "INSERT INTO `enrolments`(`course_date_id`, `student_id`) 
            VALUES ('$course_date_id', '$studentId')";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        header('Location: user.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
    mysqli_close($conn);
    
?>