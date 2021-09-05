<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TridentMarine</title>
    <!-- <script src="jquery-3.6.0.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <script src="script/courses_nav.js"></script>
    <script src="script/dateSelector.js"></script>
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
    <div class="wrapper">
        <?php include('includes/header.php')?>
            <form action="booking_form.php" class="booking_form" method="POST">
                <div class="form_wrap">
                    <ul class="form_list">
                        <li>
                            <div>
                                <label for="Fname">First Name</label>
                                <br>
                                <input type="text" placeholder="First Name..." name="first_name" required>
                            </div>
                            <div>
                                <label for="Fname">Last Name</label>
                                <br>
                                <input type="text" placeholder="Last Name..." name="last_name" required>
                            </div>    
                        </li>
                        <li>
                            <div>
                                <label for="email">Email</label>
                                <br>
                                <input type="email" placeholder="Email..." name="email" required>
                            </div>
                            <div>
                                <label for="phoneNumer" class="label2">Phone Number</label>
                                <br>
                                <input type="tel" placeholder="Phone..." name="phone" class="input2" required>
                            </div>
                        </li>

                        <!-- age -->
                        <li>
                            <div>
                                <label for="age" >Age</label>
                                <br>
                                <input name="age" type="number" required>
                            </div>
                        </li>

                        <li>
                            <div>
                                <label for="course">Selected Course:</label>
                                <br>
                                <select name="course" id="" onchange="" required>
                                    <?php 
                                        $courses = "SELECT `id`, `course_name` FROM `courses` ORDER BY 'course_type'";
                                        $courses_result = $conn->query($courses);
                                        $courses_count = $courses_result->num_rows;
                                        $courses_find = $courses_result->fetch_assoc();
                                         if ($courses_count < 1) {
                                            echo "no courses";
                                        }
                                        else{
                                            do{
                                                echo "<option value=". $courses_find["id"] .">". $courses_find["course_name"]."</option>";
                                            } while ($courses_find = $courses_result->fetch_assoc());  
                                        }
                                    ?>
                                    <!-- <option value="1">Level 1 Start Powerboating</option> -->
                                </select>
                            </div>
                        </li>
                        <li>
                            <div>
                                <label for="date">Avalible dates</label>
                                <br>
                                <div class="datePickerCont">
                                    <input class="datePicker" id="datePicker" autocomplete="off" require>
                                </div>
                            </div>
                            <!-- <div>
                                <label for="coursedates" class="label2">Selected Date</label>
                                <br>
                                <input type="text" id="dateDisplay">
                            </div> -->
                        </li>
                        <li>
                            <button class="submit" id="submit">Book</button>
                        </li>
                    </ul>
                </div>
            </form>

        <?php include('includes/footer.php')?>
    </div>
</body>
</html>