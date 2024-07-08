<?php
require_once "includes/db_connect.php";

// Handle sign-up form submission
if (isset($_POST['sign_up'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

    // Example SQL query to insert user data into the database
    $sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fullname, $email, $username, $hashed_password);
    
    if ($stmt->execute()) {
        // Redirect to a success page or do something else
        header("Location: login.php");
        exit();
    } else {
        // Handle errors, e.g., display an error message
        echo "Error: " . $conn->error;
    }
}

// Handle sign-in form submission
if (isset($_POST['sign_in'])) {
    $signin_email = $_POST['signin_email'];
    $signin_password = $_POST['signin_password'];

    // Example SQL query to fetch user data for sign-in verification
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $signin_email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($signin_password, $user['password'])) {
            // Redirect to dashboard or authenticated page
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password handling
            header("Location: index.php");
        }
    } else {
        // User not found handling
        echo "User not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in ||| Sign up form</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- JavaScript for form switching -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', function () {
                container.classList.add('right-panel-active');
            });

            signInButton.addEventListener('click', function () {
                container.classList.remove('right-panel-active');
            });
        });
    </script>
</head>
<body>

<?php
  require_once "includes/db_connect.php";
  include_once "Template/nav.php";
?>

<h2></h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" name="fullname" placeholder="Fullname" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="repeat_password" placeholder="Repeat Password" required />
            <button type="submit" name="sign_up">Sign Up</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="email" name="signin_email" placeholder="Email" required />
            <input type="password" name="signin_password" placeholder="Password" required />
            <a href="#">Forgot your password?</a>
            <button type="submit" name="sign_in">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Please enter your personal details and start the journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>
        Welcome<i class="fa fa-heart"></i> to
        <a target="_blank" href="index.php">Kyase Ranch</a>
        - a place of fresh produce, quality products and realtime experience
        <a target="_blank" href="index.php">here</a>.
    </p>
</footer>

<!-- js code -->
<script src="code.js"></script>

</body>
</html>