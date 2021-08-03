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
    <link rel="stylesheet" href="style/courses.css">
    <link rel="stylesheet" href="style/about.css">
    <link rel="stylesheet" href="style/booking.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <h1 id="test"></h1>
    <div class="wrapper">
        <?php include('includes/header.php') ?>
        <div class="title_card">
            <h1>COURSES</h1>
        </div>
        <div class="courses">
            <div class="courses_nav">
                <div class="main_btn" id="main_btn">
                    <button onclick="coursesNav(1)">
                        <h2>Personal Watercraft</h2>
                    </button>
                    <button onclick="coursesNav(2)"> 
                        <h2>Power Boating</h2>
                    </button>
                    <button onclick="coursesNav(3)">
                        <h2>Motor Cruising</h2>
                    </button>
                </div>
                <div class="sub_btn_cont">
                    <div class="slide_cont"> <!-- personal watercraft -->
                        <div class="pw_sub_btn sub_btn">
                            <button></button>
                            <button></button>
                            <button></button>
                        </div>


                        <div class="pb_sub_btn sub_btn"> <!-- power boating -->
                            <button>Level 1 Start Powerboating</button>
                            <button>Level 2 Powerboating Handling</button>
                            <button>Intermediate Powerboat Day Cruising</button>
                            <button>Advanced Powerboat Day And Night</button>
                        </div>
                        <div class="mc_sub_btn sub_btn"> <!-- motor  crusing -->
                            <button>Helmsman’s Course</button>
                            <button>Day Skipper</button>
                            <button>Coastal Skipper</button>
                        </div>
                    </div>
                </div> 
            </div><!-- nav end -->
            <!-- mobile nav -->
            <div class="courses_nav_mobile">
                <div class="main_btn_mobile" onclick="mobileCoursesNav(1)">
                    <h2>Personal Watercraft</h2>
                    <div class="course_drop_icon" id="dropIconPW"></div>
                </div>
                <div class="sub_button_mobile closed" id="subNavPW">
                    <button></button>
                    <button></button>
                    <button></button>
                </div>

                <div class="main_btn_mobile" onclick="mobileCoursesNav(2)">
                    <h2>Power Boating</h2>
                    <div class="course_drop_icon" id="dropIconPB"></div>
                </div> 
                <div class="sub_button_mobile closed" id="subNavPB">
                    <button>Level 1 Start Powerboating</button>
                    <button>Level 2 Powerboating Handling</button>
                    <button>Intermediate Powerboat Day Cruising</button>
                    <button>Advanced Powerboat Day And Night</button>
                </div>

                <div class="main_btn_mobile" onclick="mobileCoursesNav(3)">
                    <h2>Motor Cruising</h2>
                    <div class="course_drop_icon" id="dropIconMC"></div>
                </div>
                <div class="sub_button_mobile closed" id="subNavMC">
                    <button>Helmsman’s Course</button>
                    <button>Day Skipper</button>
                    <button>Coastal Skipper</button>
                </div>
            </div>


            <?php //finds names of courses of certain type e.g power boating returns level 1 power boating 
                $powerBoating = "SELECT `id`, `course_name` FROM `courses` WHERE course_type='Power Boating'";
                $powerBoating_result = $conn->query($powerBoating);
                $powerBoating_count = $powerBoating_result->num_rows;
                //wack

            ?>

            <?php 
                $course_info_query = "SELECT `id`, `course_type`, `course_name`, `aim`, `prerequisite`, `minimum_age`, `endorsement`, `image_path` FROM `courses` WHERE 1";
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


            <div class="course_display">
                <div class="course_title">
                    <h1> <?php echo $courseName;?> </h1>
                </div>
                <div class="course_outline">
                    <dl>
                        <dt>Aim:</dt>
                        <dd> <?php echo $aim; ?> </dd>
                        <dt>Prerequisites:</dt>
                        <dd> <?php echo $prereq; ?></dd>
                        <dt>Minimum Age:</dt>
                        <dd> <?php echo $minAge; ?></dd>
                        <dt>Endorsements:</dt>
                        <dd> <?php echo $aim; ?></dd>
                    </dl>
                </div>  
                <div class="course_other">
                    <div class="course_image">
                        <img src="/images/" alt="">
                    </div>
                    <button class="book_btn" onclick="location.href = './booking.php'">
                        <h1>Book</h1>
                    </button>
                </div>
            </div>



            <!-- <div class="course_display">
                <div class="course_title">
                    <h1>Level 1 Start Powerboating</h1>
                </div>
                <div class="course_outline">
                    <dl>
                        <dt>Aim:</dt>
                        <dd>To teach boat handling and seamanship in powerboats. The course may be conducted in a variety of boat types, both planning and displacement. </dd>
                        <dt>Prerequisites:</dt>
                        <dd>None</dd>
                        <dt>Minimum Age:</dt>
                        <dd>8 years old </dd>
                        <dt>Endorsements:</dt>
                        <dd>Is aged 12-15 and therefore should only used powered craft under the supervision of a responsible adult on board the craft </dd>
                    </dl>
                </div>  
                <div class="course_other">
                    <div class="course_image">
                        <img src="/images/" alt="">
                    </div>
                    <button class="book_btn" onclick="location.href = './booking.php'">
                        <h1>Book</h1>
                    </button>
                </div>
            </div> -->
        </div>
    </div>

    <?php include('./includes/footer.php')?>
    
</body>
</html>