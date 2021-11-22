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
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/courses.css">
    <link rel="stylesheet" href="../style/about.css">
    <link rel="stylesheet" href="../style/booking.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../login_register.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <?php
            include('../includes/header.php');
            if (!isset($_SESSION['loggedin'])){
                header('Location: a_login.php');
            }
        ?>
        <div class=""></div>
    </div>
</body>