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

<div class="heading" style="background:url(Images/flower.jpg) no-repeat;">
    <h1>Events</h1>
</div>


         <section class="home-projects">
        <h1 class="Heading-title"></h1>
        <div class="container-fluid text-center bg-grey">
            <h4>What we offer:</h4>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/event.jpg" alt="Farm Tours">
                        <p><strong>Graduation Parties</strong></p>
                        <p>Celebrate your education success with us</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/event3.jpg" alt="Farming Tips">
                        <p><strong>Weddings</strong></p>
                        <p>Say 'I Do' to Perfection</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/events1.jpg" alt="Animals Kept">
                        <p><strong>Birthday Parties</strong></p>
                        <p>Blow out your candles in style</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/event4.jpg" alt="Products">
                        <p><strong>Team buildings</strong></p>
                        <p>Foster team spirit</p>
                    </div>
                </div>
                <div class="load-more"><a href="products.php" class="btn">Load More</a></div>
            </div>
        </div>
    </section>

    <section class="about">

            <div class="content">
                <h3>Why choose us?</h3>
                <p></p>
                   <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-map"></i>
                        <span>Anywhere</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Affordable prices</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-tractor"></i>
                        <span>Reliable services</span>
                    </div>
                   </div>
    
                   

        </section>

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