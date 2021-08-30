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
        $inputNotValid = false;
        $emailNotValid = false;
        $passwordNotValid = false;
        $userErr = "";
        $inputErr = "";
        $emailErr = "";
        $passwordErr = "";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
                $inputValid = true;
                $inputErr = "Please complete the registration form";

                // exit('Please complete the registration form!');
            }

            if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
                $inputValid = true;
                $inputErr = "Please complete the registration form";
                // exit('Please complete the registration form');
            }

                //email validation
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailNotValid = true;
                $emailErr = "Please use valid email";
                // exit('Email is not valid!');
            }

            if (strlen($_POST['password']) < 5) {
                $passwordNotValid = true;
                $passwordErr = "Password must be have at least 5 charaters";
                // exit('Password must be between 5 and 20 characters long!');
            }

            if($inputNotValid == false && $emailNotValid == false && $passwordNotValid == false){
                include('login/register.php');
            }
        };
    ?>

    <div class="login_wrapper">
        <div class="login_cont">
            <!-- <form class="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div>
                    <h1 class="login_title">Register</h1>
                </div>
                <div class="input_cont">
                    <label for="uname">Username</label>
                    <br>
                    <input class="login_input" type="text" name="username" placeholder="User Name..." required>
                    <span class="error"><?php echo $userErr ?></span>
                </div>
                <div class="input_cont">
                    <label for="password">Password</label>
                    <br>
                    <input class="login_input" type="password" name="password" placeholder="Password..." required>
                    <span class="error"><?php echo $passwordErr ?></span>
                </div>
                <div class="input_cont">
                    <label for="email">Email</label>
                    <input class="login_input" type="email" name="email" placeholder="Email..." id="email" required>
                    <span class="error"><?php echo $emailErr ?></span>
                </div>

                <input class="login_submit" type="submit">
                <span class="error"><?php echo $inputErr?></span>
                <p>Already registered? <a href="login.php">login</a> </p>
            </form> -->

            <form class="register_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h1 class="title">Register</h1>
                <div class="first_name">
                    <label for="first_name">First name</label>
                    <input class="input_reg" type="text" name="first_name" placeholder="First name...">
                </div>

                <div class="last_name">
                    <label for="last_name">Last name</label>
                    <input class="input_reg" type="text" name="last_name" placeholder="Last name...">
                </div>

                <div class="phone">
                    <label for="phone">Phone</label>
                    <input class="input_reg" type="tel" name="phone" placeholder="Phone...">
                </div>

                <div class="age">
                    <label for="age">Age</label>
                    <input class="input_reg" type="number" name="age" placeholder="Age...">
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input class="input_reg" type="email" name="email" placeholder="Email...">
                </div>

                <span class="email_err error"><?php echo $emailErr ?></span>

                <div class="password">
                    <label for="password">Password</label>
                    <input class="input_reg" type="password" name="password" placeholder="Password...">
                </div>

                <div class="confirm_pass">
                    <label for="confirm password">Confirm password</label>
                    <input class="input_reg" type="password" name="confirm_pass" placeholder="Retype password...">
                </div>
                <span class="info_err error"><?php echo $userErr ?></span>
                <span class="pass_err error"><?php echo $passwordErr ?></span>
                <input class="submit" type="submit">

                <p class="thing">Already registered? <a href="login.php">login</a></p>
            </form>
            


        </div>
    </div>
</body>