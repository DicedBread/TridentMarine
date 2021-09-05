<?php
    include('./setup.php');
    // session_start();
    print_r($_SESSION);
    print_r($_GET);

    if (isset($_SESSION['loggedin'])){
        $userId = $_SESSION['id']; 
        echo "date " . $_GET['bookingDate'] . " for " . $_GET['courseId'] . " id " . $userId;    
    }

?>