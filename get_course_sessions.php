<?php
    include('./includes/setup.php');
    $courseId = $_GET['courseId'];
    

    $sql = "SELECT course_dates.id, course_dates.course_id, course_dates.course_date, course_dates.start_time, course_dates.enrolment_count FROM course_dates
    WHERE course_dates.course_id = 1"
?>

