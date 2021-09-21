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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <?php include('includes/header.php') ?>
        <?php 
            if (!isset($_SESSION['loggedin'])){
                header('Location: login.php');
            } else {


            $sql = "SELECT * FROM `accounts` 
            JOIN `enrolments` 
            ON accounts.student_id = enrolments.student_id 
            JOIN `course_dates` 
            ON id = enrolments.course_date_id 
            JOIN `courses`
            ON courses.id = course_dates.course_id 
            WHERE accounts.student_id = 1";
            $sql_result = $conn->query($sql);
            $sql_count = $sql_result->num_rows;
            $sql_find = $sql_result->fetch_assoc();

        // SELECT * FROM `accounts` JOIN `enrolments` ON accounts.student_id = enrolments.student_id JOIN `course_dates` ON id = enrolments.course_date_id 
        // JOIN `courses`
        // ON courses.id = course_dates.course_id 
        // WHERE accounts.student_id = 1

            ?>    
                <div class="user_inter">
                    <div class="course_feed">
                        <h2>Your Courses</h3>
                        <div class="enrol_info">
                            <div class="enrolment">
                                <div class="course_name">
                                    <h2>Course Name</h2>
                                </div>
                                <div class="info_col">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user_info">
                        <div class="user">
                            <?php  


                            ?>
                        </div>
                    </div>
                </div>

            <?php
            }
        ?>
    </div>
</body>

