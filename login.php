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
    <link rel="stylesheet" href="style/login_register.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('includes/header.php')?>

    <?php
    if  (isset($_SESSION['successful_reg'])){
        if ($_SESSION['successful_reg']){
            $autofill = $_SESSION['email'];
            $autofocus = "autofocus";
        } else {
            $autofill = "";
            $autofocus = "";
        }
    } else {
        $autofill = "";
        $autofocus = "";
    }

    $inputNotValid = false;
    $userErr = "";
    $incorrectInput = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);
        $password = trim($_POST["password"]);
        if(empty($email) || empty($password)){
            // exit('Please fill both the email and password fields!');
            $userErr = "Please fill both the email and password fields";
            $loginNotValid = true;
        }

        if (!$inputNotValid){
            include ('./login/authenticate.php');
        }else{}
    }
    ?>
    <div class="login_wrapper">

        <div class="login_cont">
            <form class="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h1 class="login_title">Login</h1>
                <div class="login_email">
                    <label for="email">Email</label>
                    <input class="input_reg" type="email" name="email" placeholder="Email..." value="<?php echo "$autofill"?>">
                </div>
                <div class="login_password">
                    <label for="password">Password</label>
                    <input class="input_reg" type="password" name="password" placeholder="Password..." <?php echo "$autofocus"?>>
                    <span class="error"><?php echo $userErr ?></span>
                    <span class="error"><?php echo $incorrectInput ?></span>
                </div>
                <input class="login_submit submit" type="submit">
                <p class="logthing">New user? <a href="register_form.php">register</a></p>
            </form>

        </div>
    </div>
</body>