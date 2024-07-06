<?php
require_once "includes/db_connect.php";
include_once "Template/header.php";
include_once "Template/nav.php";

if (isset($_GET["bookingId"])) {
    $bookingId = mysqli_real_escape_string($conn, $_GET["bookingId"]);
    $select_booking = "SELECT * FROM `event_bookings` WHERE bookingId='$bookingId' LIMIT 1";
    $result = $conn->query($select_booking);
    $row = $result->fetch_assoc();
} else {
    echo "Booking ID not specified.";
    exit();
}

if (isset($_POST['update'])) {
    $bookingId = mysqli_real_escape_string($conn, $_POST['bookingId']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $event_type = mysqli_real_escape_string($conn, $_POST['event_type']);

    $update_booking = "UPDATE `event_bookings` SET name='$name', email='$email', phone='$phone', event_date='$event_date', event_type='$event_type', dateupdated=NOW() WHERE bookingId='$bookingId'";

    if ($conn->query($update_booking) === TRUE) {
        header("Location: view_events.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_GET["DelId"])) {
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);
    $del_event = "DELETE FROM `event_bookings` WHERE bookingId='$DelId' LIMIT 1";
    if ($conn->query($del_event) === TRUE) {
        header("Location: view_events.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<div class="header">
    <h1>Edit Event</h1>
</div>

<div class="content">
    <form method="post">
        <input type="hidden" name="bookingId" value="<?php echo $row['bookingId']; ?>">
        <div class="inputBox">
            <span>Name:</span>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="inputBox">
            <span>Email:</span>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        </div>
        <div class="inputBox">
            <span>Phone:</span>
            <input type="tel" name="phone" value="<?php echo $row['phone']; ?>" required>
        </div>
        <div class="inputBox">
            <span>Event Date:</span>
            <input type="date" name="event_date" value="<?php echo $row['event_date']; ?>" required>
        </div>
        <div class="inputBox">
            <span>Event Type:</span>
            <select name="event_type" required>
                <option value="">Select an event type</option>
                <option value="Wedding" <?php if($row['event_type'] == 'Wedding') echo 'selected'; ?>>Wedding</option>
                <option value="Graduation party" <?php if($row['event_type'] == 'Graduation party') echo 'selected'; ?>>Graduation Party</option>
                <option value="Birthday party" <?php if($row['event_type'] == 'Birthday party') echo 'selected'; ?>>Birthday Party</option>
                <option value="team building" <?php if($row['event_type'] == 'team building') echo 'selected'; ?>>Team Building</option>
                <option value="wine tasting" <?php if($row['event_type'] == 'wine tasting') echo 'selected'; ?>>Wine Tasting</option>
                <option value="other" <?php if($row['event_type'] == 'other') echo 'selected'; ?>>Other</option>
            </select>
        </div>
        <input type="submit" value="Update Event" class="btn" name="update">
        <a href="view_events.php?DelId=<?php echo $row['bookingId']; ?>" class="btn">Delete Event</a>
    </form>
</div>

<?php include_once "Template/footer.php"; ?>