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
    <link rel="stylesheet" href="style/login_register.css">
    <link rel="stylesheet" href="style/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <?php
            // print_r($_SESSION); 
            include('includes/header.php');
            if (!isset($_SESSION['loggedin']) || !isset($_SESSION['admin'])){
                header('Location: index.php');
            }elseif ($_SESSION['admin'] = TRUE){
                ?>
                    <div class="add_courses">
                        <h2>add session</h2>
                        <form action="">
                            <label for="course">Choose course:</label>
                            <select name="course" id="course">
                                <optgroup label="Power Boating">
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
                                                ?>
                                                    <option value="<?php echo $powerBoating_find["id"] ?>"><?php echo $powerBoating_find['course_name'] ?></option>
                                                <?php
                                            } while ($powerBoating_find = $powerBoating_result->fetch_assoc());  
                                        }
                                    ?>
                                </optgroup> 
                            </select>
                        </form>
                    </div>
                
                
                
                
                <?php
            }
        ?>
    </div>
</body>