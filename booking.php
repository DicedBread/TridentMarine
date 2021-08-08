<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TridentMarine</title>
    <!-- <script src="jquery-3.6.0.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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
            <form action="" class="booking_form">
                <div class="form_wrap">
                    <ul class="form_list">
                        <li>
                            <label for="Fname">Full Name</label>
                            <br>
                            <input type="text" placeholder="First Name..." id="Fname">
                            <input type="text" placeholder="Last Name..." id="Lname">
                        </li>
                        <li>

                                <label for="email">Email</label>

                                <input type="email" placeholder="Email..." id="email">

                                <label for="phoneNumer" class="label2">Phone Number</label>

                                <input type="tel" placeholder="Phone" id="Phone" class="input2">

                        </li>

                        <!-- age -->

                        <li>
                            <label for="course">Selected Course:</label>
                            <br>
                            <select name="course" id="">
                                <option value="1">Level 1 Start Powerboating</option>
                            </select>
                        </li>
                        <li>
                            <div id="datepicker"></div>
                            <label for="date">Avalible dates</label>
                            <br>
                            <input type="date" name="date">
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