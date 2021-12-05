<?php
    include('./includes/setup.php');
    $courseId = $_GET['courseId'];
    

    $sql = "SELECT accounts.student_id, accounts.email, enrolments.course_date_id, enrolments.student_id, course_dates.id, course_dates.course_id, course_dates.course_date, course_dates.start_time, course_dates.enrolment_count FROM accounts
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
                        echo "course date:";
                        echo $sql_find['course_date'];
                        echo "<br>";
                        echo "student_id: ";
                        echo $sql_find['student_id'];
                    }else{
                        //runs for every other value
                        if($intCourse != $sql_find['course_date_id']){//if the session is not the same state new session
                            $sessionChange = false;
                            echo "<br><br>";
                            echo "course date:";
                            echo $sql_find['course_date'];
                            echo "<br>";
                            echo "student_id: ";
                            echo $sql_find['student_id'];
                        }else{ //if session the same add student info
                            $sessionChange = true;
                            echo "<br>";
                            echo "student_id: ";
                            echo $sql_find['student_id'];
                        }
                    }
                    $intCourse = $sql_find['course_date_id'];
                }while($sql_find = $sql_result->fetch_assoc());
            }else{
                echo "no sessions";
            }
?>


