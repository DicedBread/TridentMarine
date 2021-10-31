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
        <?php include('includes/header.php'); 
            // print_r($_SESSION); 
        ?>
        <?php 
            if (!isset($_SESSION['loggedin'])){
                header('Location: login.php');
            } else {


            $sql = "SELECT accounts.student_id, accounts.email, accounts.first_name, accounts.last_name, accounts.phone, accounts.age, course_dates.course_id, course_dates.course_date, course_dates.start_time, courses.course_name, enrolments.enrol_id  FROM `accounts` 
            JOIN `enrolments` 
            ON accounts.student_id = enrolments.student_id 
            JOIN `course_dates` 
            ON id = enrolments.course_date_id 
            JOIN `courses`
            ON courses.id = course_dates.course_id 
            WHERE accounts.student_id = 1
            ORDER BY `course_dates`.`course_date` ASC
            ";
            $sql_result = $conn->query($sql);
            $sql_count = $sql_result->num_rows;
            $sql_find = $sql_result->fetch_assoc();

            print_r($sql_find);

        // SELECT * FROM `accounts` JOIN `enrolments` ON accounts.student_id = enrolments.student_id JOIN `course_dates` ON id = enrolments.course_date_id 
        // JOIN `courses`
        // ON courses.id = course_dates.course_id 
        // WHERE accounts.student_id = 1

            $firstName = $sql_find['first_name'];
            $lastName = $sql_find['last_name'];

            ?>
                <div class="user_inter">
                    <div class="course_feed">
                        <h2>Your Enrolments</h2>
                        <div class="enrol_info">
                                <?php
                                    do{
                                        ?>
                                        <div class="enrolment">
                                            <div class="course_name">
                                                <h2><?php echo $sql_find['course_name'];?> </h2>
                                            </div>
                                            <div class="info_col">
                                                <p>Date: <br> <?php echo $sql_find['course_date'] ?></p>
                                                <p>Start time: <br> <?php echo $sql_find['start_time'] ?></p>
                                            </div>
                                            <div class="info_col"></div>
                                            <div class="info_col"></div>
                                            <div class="last_col">
                                                <div class="un_e" onclick="unenrol">
                                                    <a <?php echo "href=\"unenrol.php?enrolment=" . $sql_find['enrol_id'] . "\""?>> <p>Unenroll<p></a>
                                                    
                                                </div> 
                                            </div>
                                        </div>
                                        <?php 
                                    } while ($sql_find = $sql_result->fetch_assoc());  
                                ?>
                        </div>
                    </div> <!-- end feed -->
                    <div class="user_info">
                        <div class="user">
                            <h2>Welcome back <?php echo $firstName . " " . $lastName;?> </h2>
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

