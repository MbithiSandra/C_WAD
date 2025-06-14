<?php
require_once "includes/db_connect.php";

session_start();

if (isset($_POST["sign_up"])) {
    $fullname = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["fullname"])));
    $email = mysqli_real_escape_string($conn, strtolower($_POST["email"]));
    $username = mysqli_real_escape_string($conn, strtolower($_POST["username"]));
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $repeat_password = mysqli_real_escape_string($conn, $_POST["repeat_password"]);

    $errors = [];

    if (ctype_alpha(str_replace(" ", "", str_replace("\'", "", $fullname))) === FALSE) {
        $errors[] = "Full name contains invalid characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    $email_check_query = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    $email_check_result = $conn->query($email_check_query);
    if ($email_check_result->num_rows > 0) {
        $errors[] = "Email already exists.";
    }

    $username_check_query = "SELECT username FROM users WHERE username = '$username' LIMIT 1";
    $username_check_result = $conn->query($username_check_query);
    if ($username_check_result->num_rows > 0) {
        $errors[] = "Username already exists.";
    }

    if (strcmp($password, $repeat_password) != 0) {
        $errors[] = "Passwords do not match.";
    }

    if (strlen($password) < 4 || strlen($password) > 8) {
        $errors[] = "Password length should be between 4 and 8 characters.";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $insert_user_query = "INSERT INTO users (Fullname, Email, Username, Password) VALUES ('$fullname', '$email', '$username', '$hashed_password')";

        if ($conn->query($insert_user_query) === TRUE) {
            $_SESSION["success"] = "Account created successfully!";
            header("Location: index.php"); // Redirect to home page
            exit();
        } else {
            echo "Error: " . $insert_user_query . "<br>" . $conn->error;
        }
    } else {
        $_SESSION["errors"] = $errors;
        header("Location: signup.php");
        exit();
    }
}

if (isset($_POST["sign_in"])) {
    $email = mysqli_real_escape_string($conn, strtolower($_POST["signin_email"]));
    $password = mysqli_real_escape_string($conn, $_POST["signin_password"]);

    $login_query = "SELECT * FROM users WHERE Email = '$email'";
    $login_result = $conn->query($login_query);

    if ($login_result->num_rows > 0) {
        $user = $login_result->fetch_assoc();
        if (password_verify($password, $user["Password"])) {
            $_SESSION["user"] = $user;
            header("index.php"); // Redirect to home page
            exit();
        } else {
            $_SESSION["error"] = "Invalid password.";
            header("Location: signin.php"); // Redirect back to sign-in page on failure
            exit();
        }
    } else {
        $_SESSION["error"] = "No user found with that email.";
        header("Location: signin.php"); // Redirect back to sign-in page on failure
        exit();
    }
}


