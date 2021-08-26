<html lang="en">
<head>
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
    <link rel="stylesheet" href="style/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('includes/header.php')?>
    <div class="login_wrapper">
        <div class="login_cont">
            <form class="login_form" action="./login/register.php" method="POST">
                <div>
                    <h1 class="login_title" >register</h1>
                </div>
                <div>
                    <label  for="uname">Username</label>
                    <br>
                    <input class="login_input" type="text" name="username" placeholder="User Name..." required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <br>
                    <input class="login_input" type="password" name="password" placeholder="Password..." required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input class="login_input" type="email" name="email" placeholder="Email" id="email" required>
                </div>

                <input class="login_submit" type="submit">
                <p>Already registered? <a href="login.php">login</a> </p>
            </form>

        </div>
    </div>
</body>