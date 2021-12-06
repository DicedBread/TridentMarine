<?php
    include('./includes/setup.php');
    $courseId = $_GET['courseId'];
    

    $sql = "SELECT accounts.student_id, accounts.email, accounts.first_name, accounts.last_name, enrolments.course_date_id, enrolments.student_id, course_dates.id, course_dates.course_id, course_dates.course_date, course_dates.start_time, course_dates.enrolment_count FROM accounts
            JOIN enrolments ON accounts.student_id = enrolments.student_id
            JOIN course_dates ON enrolments.course_date_id = course_dates.id
            WHERE course_dates.course_id = $courseId
            ORDER BY course_dates.course_date ASC";
            $sql_result = $conn->query($sql);
            $sql_count = $sql_result->num_rows;
            $sql_find = $sql_result->fetch_assoc();

            if($sql_count > 0){
                do{
                    if (!isset($intCourse)){//runs only on first value 
                        $intCourse = $sql_find['course_date_id'];
                        ?>
                        <div class="session_info">
                            <div class="session_time">
                                <h2>Date: <?php echo $sql_find['course_date']; ?></h2>
                                <p>Start time:<?php echo $sql_find['start_time']; ?></p>
                            </div>
                            <ul class="session_enroled">
                            <h2>enroled</h2>
                            <li>
                                <?php echo $sql_find['first_name']; ?> <?php echo $sql_find['last_name']; ?>
                            </li>
                        <?php
                    }else{
                        //runs for every other value
                        if($intCourse != $sql_find['course_date_id']){//if the session is not the same state new session
                            ?>
                                </ul>
                            </div>
                            <div class="session_info">
                                <div class="session_time">
                                    <h2>Date: <?php echo $sql_find['course_date']; ?></h2>
                                    <p>Start time: <?php echo $sql_find['start_time']; ?></p>
                                </div>
                            <ul class="session_enroled">
                            <h2>enroled</h2>

                            <li>
                                <?php echo $sql_find['first_name']; ?> <?php echo $sql_find['last_name']; ?>
                            </li>

                            <?php
                        }else{ //if session the same add student info
                            ?>
                            <li>
                                <?php echo $sql_find['first_name']; ?> <?php echo $sql_find['last_name']; ?>
                            </li>
                            <?php
                        }
                    }
                    $intCourse = $sql_find['course_date_id'];
                }while($sql_find = $sql_result->fetch_assoc());
                
            }else{
                echo "no sessions";
            }
?>
    <!-- closes last tab -->
    </ul>
</div>



