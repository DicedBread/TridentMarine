<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TridentMarine</title>
    <!-- <script src="jquery-3.6.0.min.js"></script> -->
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
    <div class="wrapper">
        <?php include('includes/header.php')?>
            <form action="" class="booking_form">
                <fieldset>
                    <legend><h2>Booking</h2></legend>

                    <input type="text" placeholder="First Name...">
                    <input type="text" placeholder="Last Name...">
                    <br>
                    <input type="text" placeholder="Email...">

                    <h3>Selected course</h3>
                        <p>Level 1 Start Powerboating</p>

                </fieldset>
            </form>

        <?php include('includes/footer.php')?>
    </div>
</body>
</html>