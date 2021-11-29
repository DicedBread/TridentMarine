<?php
    include('./includes/setup.php');
    $selectedCourse = $_GET['selection'];

    // `id`, `course_type`, `course_name`, `aim`, `prerequisite`, `minimum_age`, `endorsement`, `image_path`

    // $course_info_query = "SELECT * FROM `courses`  
    // INNER JOIN `course_dates` ON (courses.id = course_dates.course_id)
    // WHERE courses.id='$selectedCourse'
    // ";

    $course_info_query = "SELECT `id`, `course_type`, `course_name`, `aim`, `prerequisite`, `minimum_age`, `endorsement`, `image_path` FROM `courses` WHERE id='$selectedCourse'";
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

    // print_r($find);
?>

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
            <dd> <?php echo $endorsment; ?></dd>
        </dl>
    </div>  
    <div class="course_other">
        <!-- <div class="course_image">
            <img src="/images/" alt="">
        </div> -->

        <?php
            // $dates_query = "SELECT `id` `course_id` `course_date` `start_time` `enrolment_count` FROM `course_dates` WHERE id='$selectedCourse' ORDER BY `course_dates`.`course_date` ASC";
            // $date_result = $conn->query($dates_query);
            // $date_count = $date_result->num_rows;
            // $date_find = $date_result->fetch_assoc();

            $dates_query = "SELECT `id`, `course_id`, `course_date`, `start_time`, `enrolment_count` FROM `course_dates` WHERE course_id='$selectedCourse' ORDER BY `course_date` ASC";
            $dates_result = $conn->query($dates_query);
            $dates_count = $dates_result->num_rows;
            $dates_find = $dates_result->fetch_assoc();
        ?>


        <h2>Available Dates</h2>
        <div class="date_table">
            <div class="book_row">
                <?php
                    if (isset($_SESSION['loggedin'])){
                        if ($dates_count > 0){
                            do{
                                //logged in display 
                                ?>
                                    <div class="book_col" style="width: calc(100%/<?php echo $dates_count; ?>);"> 
                                        <div><p><?php echo $dates_find['course_date']; ?></p></div>
                                        <a href="booking.php?bookingDate=<?php echo $dates_find['course_date'];?>&courseId=<?php echo $courseId;?>&course_date_id=<?php echo $dates_find['id']; ?>">
                                            <button>Book</button>
                                        </a>
                                    </div>
                                <?php
                            } while ($dates_find = $dates_result->fetch_assoc());
                        } else {
                            echo "<h2>No upcoming sessions</h2>"; //no result
                        }
                    } else {
                        if ($dates_count > 0){
                            do{ //not logged in display
                            ?>  
                                <div class="book_col" style="width: calc(100%/<?php echo $dates_count; ?>);"> 
                                    <div><p><?php echo $dates_find['course_date']; ?></p></div>
                                </div>
                            <?php
                            } while ($dates_find = $dates_result->fetch_assoc());
                        } else {
                            echo "<h2>No upcoming sessions</h2>"; //no result
                        }
                        ?>
                        <a class="login_btn" href="login.php"><button>Login to book</button></a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>