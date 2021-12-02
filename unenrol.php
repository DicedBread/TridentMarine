<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TridentMarine</title>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script/courses_nav.js"></script>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/user.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/login_register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
            <?php 
                include('includes/header.php'); 
                print_r($_SESSION);
                $student_id = $_SESSION['student_id'];

                if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
                    $enrol_id = $_POST['enrol_id'];   
                    echo $enrol_id;
                    // echo gettype($enrol_id);
                    
                    $enrolCount = "SELECT enrolments.enrol_id, enrolments.course_date_id, course_dates.id, course_dates.enrolment_count FROM `enrolments`
                    JOIN course_dates ON course_dates.id = enrolments.course_date_id
                    WHERE enrolments.enrol_id = $enrol_id";
                    $enrolCount_result = $conn->query($enrolCount);
                    $enrolCount_count = $enrolCount_result->num_rows;
                    $enrolCount_find = $enrolCount_result->fetch_assoc();
                    $course_date_id = $enrolCount_find['id'];
                    $currentEnrolCount = $enrolCount_find['enrolment_count'];

                    //deletes enrolment
                    if ($stmt = $conn->prepare("DELETE FROM enrolments WHERE student_id = ? AND enrol_id = ?")){
                        $stmt->bind_param('ii', $student_id, $enrol_id);
                        $stmt->execute();
                        
                        //decrement enrol count
                        $updated_enrolCount = $currentEnrolCount - 1;
                        $enrolDown = "UPDATE `course_dates` SET enrolment_count='$updated_enrolCount' WHERE id = $course_date_id"; 
                        if($conn->query($enrolDown) === TRUE){
                        //      header('Location: index.php');
                        // }else{
                        //     echo "Error: " . $enrolDown . "<br>" . mysqli_error($conn);
                        // }
                    }else{
                        echo "Failed to prepare statement";
                    }

                    $stmt->close();
                    header('Location: ./user.php');
                }

                
                $enrolment_id = $_GET['enrolment'];
                if (!empty($enrolment_id)){
                    $sql = "SELECT enrolments.enrol_id, enrolments.course_date_id, enrolments.student_id, course_dates.id, course_dates.course_id, courses.id, courses.course_name FROM `enrolments` 
                    JOIN `course_dates` 
                    ON enrolments.course_date_id = course_dates.id
                    JOIN `courses`
                    ON course_dates.course_id = courses.id
                    WHERE enrolments.student_id = $student_id AND enrolments.enrol_id = $enrolment_id
                    ORDER BY `course_dates`.`course_date` ASC 
                    ";
                    $sql_result = $conn->query($sql);
                    $sql_count = $sql_result->num_rows;
                    $sql_find = $sql_result->fetch_assoc();
                    // print_r($sql_find);
                    if ($sql_count > 0){ 
                        $course_name = $sql_find['course_name'];
                    }else{
                        header('Location: ./user.php');
                    }
                }else{
                    header('location: ./user.php');
                }
                

            ?>

            <div class="unenrol_cont">
                <form class="unenrol_form login_cont" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">
                    <input type="hidden" name="enrol_id" value="<?php echo $enrolment_id?>"> 
                    <h2>Are you sure you want to unenrol from the <?php echo $course_name ?> course?</h2>
                    <input class="submit" type="submit" value="Confirm"> 
                </form>
            </div>
    </div>
</body>