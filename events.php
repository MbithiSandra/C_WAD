<?php 
require_once "includes/db_connect.php"; 
include_once "Template/header.php"; 
include_once "Template/nav.php"; 

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $event_type = mysqli_real_escape_string($conn, $_POST['event_type']);

    $insert_booking = "INSERT INTO `event_bookings` (name, email, phone, event_date, event_type, datecreated) 
                       VALUES ('$name', '$email', '$phone', '$event_date', '$event_type', NOW())";

    if ($conn->query($insert_booking) === TRUE) {
        header("Location: view_events.php");
        exit();
    } else {
        echo "Error: " . $insert_booking . "<br>" . $conn->error;
    }
}
?>

<div class="header">
    <h1>Book an Event</h1>
</div>

<div class="content">
    <form method="post" class="booking-form">
        <div class="inputBox">
            <span>Name:</span>
            <input type="text" placeholder="Enter your name" name="name" required>
        </div>
        <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="inputBox">
            <span>Phone:</span>
            <input type="tel" placeholder="Enter your phone number" name="phone" required>
        </div>
        <div class="inputBox">
            <span>Event Date:</span>
            <input type="date" name="event_date" required>
        </div>
        <div class="inputBox">
            <span>Event Type:</span>
            <select name="event_type" required>
                <option value="">Select an event type</option>
                <option value="Wedding">Wedding</option>
                <option value="Graduation party">Graduation Party</option>
                <option value="Birthday party">Birthday Party</option>
                <option value="team building">Team Building</option>
                <option value="wine tasting">Wine Tasting</option>
                <option value="other">Other</option>
            </select>
        </div>
        <input type="submit" value="Book Event" class="btn" name="submit">
    </form>
</div>

<?php include_once "Template/footer.php"; ?>