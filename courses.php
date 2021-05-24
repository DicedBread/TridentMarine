<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TridentMarine</title>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="script/style.js"></script>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/courses.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <h1 id="test"></h1>
    <div class="wrapper">
        <?php include('includes/header.php') ?>
        <div class="courses_title_card">
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
                <div class="sub_btn"></div>
            </div>
            <!-- three main button  -->
            <!-- with second div with the display crap -->
        </div>
    </div>
    
</body>
</html>