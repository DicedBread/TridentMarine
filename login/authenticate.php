<?php 
    // include('../setup.php');



    // If the email and password are not blank strings
    if(empty($email) || empty($password)){
        exit('Please fill both the email and password fields!');
    }

    if ( !isset($_POST['username'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }

    //searches for username and stores pass and id
    if ($stmt = $conn->prepare("SELECT student_id, password FROM `accounts` WHERE email = ?")) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($student_id, $password);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if (password_verify($_POST['password'], $password)) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['email'];
                $_SESSION['student_id'] = $student_id;
                header('Location: ./courses.php');

            } else {
                // Incorrect password
                // echo 'Incorrect email and/or password!';
                $incorrectInput = "Incorrect email and/or password!";
            }
        } else {
            // Incorrect username
            // echo 'Incorrect email and/or password!';
            $incorrectInput = "Incorrect email and/or password!";
        }
        
        $stmt->close();
    }
?>

