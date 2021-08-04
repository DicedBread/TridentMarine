<?php

    $selectedCourse = $_get[""];

    $course_info_query = "SELECT `id`, `course_type`, `course_name`, `aim`, `prerequisite`, `minimum_age`, `endorsement`, `image_path` FROM `courses` WHERE course_name='$selectedCourse'";
    $result = $conn->query($course_info_query);
    $count = $result->num_rows;
    $find = $result->fetch_assoc();

    $courseId = $find["id"];
    $courseType = $find["course_type"];
    $courseName = $find["course_name"];
    $aim = $find["aim"];
    $prereq = $find["prerequisite"];
    $minAge = $find["minimum_age"];
    $endorsment = $find["endorsement"];
?>