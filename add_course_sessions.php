<?php
    include('./includes/setup.php');
    $courseId = $_GET['courseId'];
    $newDate = $_GET['newDate'];
    $newTime = $_GET['newTime'];

    if ($stmt = $conn->prepare("INSERT INTO course_dates (course_id, course_date, start_time) VALUES (?, ?, ?)")) {
        $stmt->bind_param('iss', $courseId, $newDate, $newTime);
        $stmt->execute();
        ?>
            <script>
                // window.onload = courseSessions();
            </script>
        <?php
    }
?>
    






