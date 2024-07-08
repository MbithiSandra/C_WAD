<?php
require_once "includes/db_connect.php";
include_once "Template/header.php";
include_once "Template/nav.php";

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



<div class="content">
    <h1>Events List</h1>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Event Date</th>
                <th>Event Type</th>
                <th>Date Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select_events = "SELECT * FROM `event_bookings` ORDER BY datecreated DESC";
            $sel_events_res = $conn->query($select_events);
            $cm = 0;
            if ($sel_events_res->num_rows > 0) {
                while ($sel_events_row = $sel_events_res->fetch_assoc()) {
                    $cm++;
            ?>
            <tr>
                <td><?php print $cm; ?>.</td>
                <td><?php print $sel_events_row["name"]; ?></td>
                <td><?php print $sel_events_row["email"]; ?></td>
                <td><?php print $sel_events_row["phone"]; ?></td>
                <td><?php print $sel_events_row["event_date"]; ?></td>
                <td><?php print $sel_events_row["event_type"]; ?></td>
                <td><?php print $sel_events_row["datecreated"]; ?></td>
                <td>
                    <a href="edit_events.php?bookingId=<?php print $sel_events_row["bookingId"]; ?>" class="edit_btn">Edit</a>
                    <a href="view_events.php?DelId=<?php print $sel_events_row["bookingId"]; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='8'>No events found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include_once "Template/footer.php"; ?>