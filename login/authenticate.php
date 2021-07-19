<?php

// We need to use sessions, so you should always start sessions using the below code.

// If the user is not logged in redirect to the login page...
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */

require_once '../connection/conn.php';
$conn = mysqli_connect($hn, $un, $pw, $db);

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password field!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT id, password, is_admin FROM finalweb.user WHERE username = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    // If the username exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $admin);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['is_admin'] = $admin;
            if ($admin == 1) {
                header('Location: ../admin');
            }
            else{
                header('Location: ../user');
            }

        } else {
            echo 'Incorrect password!';
        }
    }
}
