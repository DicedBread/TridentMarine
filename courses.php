<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TridentMarine</title>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script/courses_nav.js"></script>
    <script src="script/courseDisplay.js"></script>
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
<body onload="displayCourse(1)">
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
                <?php 
                    $names = "SELECT `id`, `course_name`, `course_type` FROM `courses` ";
                    $names_result = $conn->query($names);
                    $names_count = $names_result->num_rows;
                    $names_find = $names_result->fetch_assoc();
                    

                    do{
                        if ($names_find['course_type'] == "Power Boating"){
                            echo "<button onclick=\"displayCourse(" . $names_find["id"] . ")\" >" . $names_find["course_name"] . "</button>";
                        }
                        else{
                        }
                    } while ($names_find = $names_result->fetch_assoc());

                ?>

                <div class="sub_btn_cont">
                    <div class="slide_cont"> <!-- personal watercraft -->
                        <div class="pw_sub_btn sub_btn">
                        <?php //finds names of courses of certain type 
                            $personalWatercraft = "SELECT `id`, `course_name` FROM `courses` WHERE course_type='Personal Watercraft'";
                            $personalWatercraft_result = $conn->query($personalWatercraft);
                            $personalWatercraft_count = $personalWatercraft_result->num_rows;
                            $personalWatercraft_find = $personalWatercraft_result->fetch_assoc();

                            if ($personalWatercraft_count < 1) {
                                echo "no courses";
                            }
                            else{
                                do{
                                    echo "<button onclick=\"displayCourse(" . $personalWatercraft_find["id"] . ")\" >" . $personalWatercraft_find["course_name"] . "</button>";
                                } while ($personalWatercraft_find = $personalWatercraft_result->fetch_assoc());  
                            }
                        ?>
                        </div>

                        <!-- Power Boating -->
                        <div class="pb_sub_btn sub_btn"> 
                        <?php //finds names of courses of certain type e.g power boating returns level 1 power boating 
                            $powerBoating = "SELECT `id`, `course_name` FROM `courses` WHERE course_type='Power Boating'";
                            $powerBoating_result = $conn->query($powerBoating);
                            $powerBoating_count = $powerBoating_result->num_rows;
                            $powerBoating_find = $powerBoating_result->fetch_assoc();

                            if ($powerBoating_count < 1) {
                                echo "no courses";
                            }
                            else{
                                do{
                                    echo "<button onclick=\"displayCourse(" . $powerBoating_find["id"] . ")\" >" . $powerBoating_find["course_name"] . "</button>";
                                } while ($powerBoating_find = $powerBoating_result->fetch_assoc());  
                            }
                        ?>
                        </div>

                        <div class="mc_sub_btn sub_btn"> <!-- motor  crusing -->
                        <?php //finds names of courses of certain type e.g power boating returns level 1 power boating
                           $motorCruising = "SELECT `id`, `course_name` FROM `courses` WHERE course_type='Motor Cruising'";
                           $motorCruising_result = $conn->query($motorCruising);
                           $motorCruising_count = $motorCruising_result->num_rows;
                           $motorCruising_find = $motorCruising_result->fetch_assoc();
 
                           if ($motorCruising_count < 1) {
                               echo "no courses";
                           }
                           else{
                               do{
                                   echo "<button onclick=\"displayCourse(" . $motorCruising_find["id"] . ")\" >" . $motorCruising_find["course_name"] . "</button>";
                               } while ($motorCruising_find = $motorCruising_result->fetch_assoc()); 
                           }
                       ?>


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
                    <?php //finds names of courses of certain type 
                        $personalWatercraft = "SELECT `id`, `course_name` FROM `courses` WHERE course_type='Personal Watercraft'";
                        $personalWatercraft_result = $conn->query($personalWatercraft);
                        $personalWatercraft_count = $personalWatercraft_result->num_rows;
                        $personalWatercraft_find = $personalWatercraft_result->fetch_assoc();

                        if ($personalWatercraft_count < 1) {
                            echo "no courses";
                        }
                        else{
                            do{
                                echo "<button onclick=\"displayCourse(" . $personalWatercraft_find["id"] . ")\" >" . $personalWatercraft_find["course_name"] . "</button>";
                            } while ($personalWatercraft_find = $personalWatercraft_result->fetch_assoc());  
                        }
                    ?>
                </div>

                <div class="main_btn_mobile" onclick="mobileCoursesNav(2)">
                    <h2>Power Boating</h2>
                    <div class="course_drop_icon" id="dropIconPB"></div>
                </div> 
                <div class="sub_button_mobile closed" id="subNavPB">
                    <?php
                        $powerBoating = "SELECT `id`, `course_name` FROM `courses` WHERE course_type='Power Boating'";
                        $powerBoating_result = $conn->query($powerBoating);
                        $powerBoating_count = $powerBoating_result->num_rows;
                        $powerBoating_find = $powerBoating_result->fetch_assoc();
                        if ($powerBoating_count < 1) {
                            echo "no courses";
                        }
                        else{
                            do{
                                echo "<button onclick=\"displayCourse(" . $powerBoating_find["id"] . ")\" >" . $powerBoating_find["course_name"] . "</button>";
                            } while ($powerBoating_find = $powerBoating_result->fetch_assoc());  
                        }
                    ?>

                </div>

                <div class="main_btn_mobile" onclick="mobileCoursesNav(3)">
                    <h2>Motor Cruising</h2>
                    <div class="course_drop_icon" id="dropIconMC"></div>
                </div>
                <div class="sub_button_mobile closed" id="subNavMC">
                    <?php //finds names of courses of certain type e.g power boating returns level 1 power boating
                        $motorCruising = "SELECT `id`, `course_name` FROM `courses` WHERE course_type='Motor Cruising'";
                        $motorCruising_result = $conn->query($motorCruising);
                        $motorCruising_count = $motorCruising_result->num_rows;
                        $motorCruising_find = $motorCruising_result->fetch_assoc();
 
                        if ($motorCruising_count < 1) {
                            echo "no courses";
                        }
                        else{
                            do{
                                echo "<button onclick=\"displayCourse(" . $motorCruising_find["id"] . ")\" >" . $motorCruising_find["course_name"] . "</button>";
                            } while ($motorCruising_find = $motorCruising_result->fetch_assoc()); 
                        }
                    ?>
                </div>
            </div>

            <div class="course_display" id="courseDisplay">
            
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
                </div>-->
            </div> 
        </div>
    </div>

    <?php include('./includes/footer.php')?>
    
</body>
</html>