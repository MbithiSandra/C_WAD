<?php
require_once "includes/db_connect.php";
include_once "Template/header.php";
include_once "Template/nav.php";

if(isset($_GET["farmtourId"])) {
    $farmtourId = mysqli_real_escape_string($conn, $_GET["farmtourId"]);

    // Fetch farmtour data
    $select_ft = "SELECT * FROM `farmtours` WHERE farmtourId='$farmtourId' LIMIT 1";
    $sel_ft_res = $conn->query($select_ft);

    if ($sel_ft_res->num_rows > 0) {
        $row = $sel_ft_res->fetch_assoc();
    } else {
        echo "No record found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

if(isset($_POST["update"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $date_of_tour = mysqli_real_escape_string($conn, $_POST["date_of_tour"]);
    $knowledge_level = mysqli_real_escape_string($conn, $_POST["knowledge_level"]);
    $language_spoken = mysqli_real_escape_string($conn, $_POST["language_spoken"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);

    $update_ft = "UPDATE `farmtours` SET 
        name='$name', 
        email='$email', 
        phone='$phone', 
        date_of_tour='$date_of_tour', 
        knowledge_level='$knowledge_level', 
        language_spoken='$language_spoken', 
        gender='$gender',
        dateupdated=NOW() 
        WHERE farmtourId='$farmtourId' LIMIT 1";

    if ($conn->query($update_ft) === TRUE) {
        header("Location: view_farmtour.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if(isset($_POST["delete"])) {
    $del_ft = "DELETE FROM `farmtours` WHERE farmtourId='$farmtourId' LIMIT 1";

    if ($conn->query($del_ft) === TRUE) {
        header("Location: view_farmtour.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<div class="header">
    <h1>Edit Farm Tour</h1>
</div>

<div class="content">
    <form method="post">
        <div class="inputBox">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
        </div>
        <div class="inputBox">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">
        </div>
        <div class="inputBox">
            <label>Phone:</label>
            <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>">
        </div>
        <div class="inputBox">
            <label>Date of Tour:</label>
            <input type="date" name="date_of_tour" value="<?php echo htmlspecialchars($row['date_of_tour']); ?>">
        </div>
        <div class="inputBox">
            <label>Knowledge Level:</label>
            <input type="radio" name="knowledge_level" value="Basic" <?php echo ($row['knowledge_level'] == 'Basic') ? 'checked' : ''; ?>> Basic
            <input type="radio" name="knowledge_level" value="Intermediate" <?php echo ($row['knowledge_level'] == 'Intermediate') ? 'checked' : ''; ?>> Intermediate
            <input type="radio" name="knowledge_level" value="Advanced" <?php echo ($row['knowledge_level'] == 'Advanced') ? 'checked' : ''; ?>> Advanced
        </div>
        <div class="inputBox">
            <label>Language Spoken:</label>
            <input type="radio" name="language_spoken" value="Swahili" <?php echo ($row['language_spoken'] == 'Swahili') ? 'checked' : ''; ?>> Swahili
            <input type="radio" name="language_spoken" value="English" <?php echo ($row['language_spoken'] == 'English') ? 'checked' : ''; ?>> English
            <input type="radio" name="language_spoken" value="Spanish" <?php echo ($row['language_spoken'] == 'Spanish') ? 'checked' : ''; ?>> Spanish
            <input type="radio" name="language_spoken" value="Japanese" <?php echo ($row['language_spoken'] == 'Japanese') ? 'checked' : ''; ?>> Japanese
        </div>
        <div class="inputBox">
            <label>Gender:</label>
            <select name="gender">
                <option value="Female" <?php echo ($row['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                <option value="Male" <?php echo ($row['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                <option value="Rather not say" <?php echo ($row['gender'] == 'Rather not say') ? 'selected' : ''; ?>>Rather not say</option>
            </select>
        </div>
        <div class="inputBox">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
        </div>
    </form>
</div>

<?php include_once "Template/footer.php"; ?>