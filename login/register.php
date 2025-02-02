<?php 
    // include('../setup.php');

    // // Now we check if the data was submitted, isset() function will check if the data exists.
    // if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// // Could not get the data that should have been sent.
	//     exit('Please complete the registration form!');
    // }
    // // Make sure the submitted registration values are not empty.
    // if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// // One or more values are empty.
	//     exit('Please complete the registration form');
    // }

    // //email validation
    // if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //     exit('Email is not valid!');
    // }

    // if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    //     exit('Password must be between 5 and 20 characters long!');
    // }
    
    // We need to check if the account with that username exists.
    // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
    if ($stmt = $conn->prepare("SELECT student_id FROM accounts WHERE email = ?")) {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result(); // Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
        $emailErr = "There is already an account associated with this email address";
	} else {
		// Username doesnt exists, insert new account
        if ($stmt = $conn->prepare("INSERT INTO accounts (email, password, first_name, last_name, phone, age) VALUES (?, ?, ?, ?, ?, ?)")) {
	    // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	        $stmt->bind_param('ssssii', $_POST['email'], $password, $_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['age'] );
	        $stmt->execute();
	        echo 'You have successfully registered, you can now login!';
	        $_SESSION['successful_reg'] = TRUE;
            $_SESSION['email'] = $_POST['email'];
            header('Location: ./login.php');
        } else {
	        echo 'Could not prepare statement!';
        }
	}

	$stmt->close();

    } else {
	    // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	    echo 'Could not prepare statement!';
    }
    $conn->close();


