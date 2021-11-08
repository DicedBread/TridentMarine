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
                $enrolment_id = $_GET['enrolment'];
                $sql = "SELECT * FROM `enrolments` 
                WHERE student_id = $student_id AND 
                ORDER BY `course_dates`.`course_date` ASC 
                ";                
            ?>
            <div class="unenrol_cont">
                <form class="unenrol_form login_cont">
                    <p>Are you sure you want to unenrol from the <?php  ?> course?</p>
                    <button>Confirm</button> 
                </form>
            </div>
    </div>
</body>