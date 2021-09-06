<?php 
// session_start();
include('setup.php')?>

<?php
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


        <h2>Avalible Dates</h2>
        <div class="date_table">
            <div class="table_row">
                <?php
                    $i = 0;
                    if ($dates_count > 0){
                        do{
                            echo "<div>" . $dates_find['course_date'] . "</div>";
                        //    $i++; 
                        } while ($dates_find = $dates_result->fetch_assoc());
                    } else {
                        echo "no upcoming sessions";
                    }


                ?>
                <!-- <div>12-07-2021</div>
                <div>19-07-2021</div>
                <div>26-07-2021</div> -->
            </div>
            <div class="table_row">
                <button><a href="booking.php?bookingDate=12-07-2021&courseId= <?php echo $courseId ?>">Book</a></button>
                <button>Book</button>
                <button>Book</button>
            </div>
        </div>
        
            <?php 
                // if (isset($_SESSION['loggedin'])){
                //     echo "
                //     <button class=\"book_btn\" onclick=\"location.href = './booking.php'\"><h1>Book</h1></button>
                //     ";
                // }else{
                //     echo "
                //     <button class=\"book_btn\" onclick=\"location.href = './login.php'\"><h1>Login To Book</h1></button>
                //     ";
                // }
            ?>
    </div>