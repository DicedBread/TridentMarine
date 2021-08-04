
<?php include('setup.php')?>

<?php
    $selectedCourse = $_GET['selection'];

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