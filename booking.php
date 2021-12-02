<?php
    include('includes/setup.php');
    // session_start();
    // print_r($_SESSION);
    // print_r($_GET);

    // if (isset($_SESSION['loggedin'])){
    //     $userId = $_SESSION['id']; 
    //     echo "date " . $_GET['bookingDate'] . " for " . $_GET['courseId'] . " id " . $userId;    
    // }
    
    $selectedDate = $_GET['bookingDate'];
    $course_date_id = $_GET['course_date_id'];
    $studentId = $_SESSION['student_id'];

    $enrolCount = "SELECT * FROM `course_dates` WHERE id = $course_date_id";
    $enrolCount_result = $conn->query($enrolCount);
    $enrolCount_count = $enrolCount_result->num_rows;
    $enrolCount_find = $enrolCount_result->fetch_assoc();

    // echo $enrolCount_count;
    $currentEnrolCount = $enrolCount_find['enrolment_count'];

    $sql = "INSERT INTO `enrolments`(`course_date_id`, `student_id`) 
            VALUES ('$course_date_id', '$studentId')";

    if (mysqli_query($conn, $sql)) {
        $updated_enrolCount = $currentEnrolCount + 1;
        
        $enrolUp = "UPDATE `course_dates` SET enrolment_count='$updated_enrolCount' WHERE id = $course_date_id"; 
        if($conn->query($enrolUp) === TRUE){
            header('Location: index.php');
        }else{
            echo "Error: " . $enrolUp . "<br>" . mysqli_error($conn);
        }

        // echo "New record created successfully";
        header('Location: user.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
    mysqli_close($conn);
    
?>