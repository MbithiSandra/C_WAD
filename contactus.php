<?php
  
  require_once "includes/db_connect.php";
  include_once "Template/header.php";
  include_once "Template/nav.php";

    if(isset($_POST["send_message"])){
        $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
        $email = mysqli_real_escape_string($conn, $_POST["email_address"]);
        $subject_line = mysqli_real_escape_string($conn, $_POST["subject_line"]);
        $text_message = mysqli_real_escape_string($conn, $_POST["message"]);

        $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, message) 
        VALUES ('$fullname', '$email', '$subject_line', '$text_message')";
        
        if ($conn->query($insert_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }
    }
?>

        <

    <div class="header">
    <h1></h1>
</div>
<div class="heading" style="background:url(Images/flower4.jpg) no-repeat;">
    <h1>Contact Us</h1>
</div>

    
    <div class="content">
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form">
        <label for="Fn">Fullname:</label><br>
        <input type="text" name="fullname" id="Fn" placeholder="Fullname" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email_address" placeholder="Email address" required><br><br>
        
        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="farm help">Farm Help</option>
            <option value="Product Ordering">Product Ordering</option>
            <option value="Event Planning">Event Planning</option>
        </select>
        <br><br>
    <label for="ms">Message:</label><br>
    <textarea cols="30" rows="7" name="message" id="ms" required></textarea><br><br>
    <input type="submit" name="send_message" value="Send Message" >
</form>
</div>

<?php include_once "Template/footer.php"; ?>
    </body>
</html>