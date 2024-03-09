<?php
// Starting the session
session_start();

// Including the database connection file
include "db_conn.php";

// Checking if both uname and password are set in the POST request
if (isset($_POST['uname']) && isset($_POST['password'])) {

    // Function to sanitize the data received from the form
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Sanitizing uname and password
    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    $user_data = 'uname=' . $uname;

    // Checking if uname is empty
    if (empty($uname)) {
        header("Location: login.php?error=User name is required");
        exit();
        // Checking if pass is empty
    } else if (empty($password)) {
        header("Location: login.php?error=Password is required&$user_data");
        exit();
    } else {

        // Hashing the password
        $password = validate($_POST['password']);
        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_name=? AND is_verified='1'");
        // Bind parameters
        $stmt->bind_param("s", $uname); // 's' specifies the variable type => 'string'

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // If there is a result then the user exists
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // Checking if the password is correct
            if (password_verify($password, $row['password'])) {
                echo "Logged in!";
                // Storing the user data in the session
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['user_id'] = $row['user_id'];
                $query = "UPDATE user SET status = 'online' WHERE user_name = '$uname'";
                mysqli_query($conn, $query);
                header("Location:home.php");
                exit();
            } else {
                header("Location: login.php?error=Incorrect user name or password&$user_data");
                exit();
            }
        } else {
            header("Location: login.php?error=Your account isn't verified yet&$user_data");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
