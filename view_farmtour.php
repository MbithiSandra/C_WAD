<?php
require_once "includes/db_connect.php";
include_once "Template/header.php";
include_once "Template/nav.php";

if(isset($_GET["DelId"])){
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);
    
    $del_ft = "DELETE FROM `farmtours` WHERE farmtourId='$DelId' LIMIT 1";
    
    if ($conn->query($del_ft) === TRUE) {
        header("Location: view_farmtour.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<div class="header">
    <h1>Farm Tours</h1>
</div>

<div class="content">
    <h1>Farm Tours List</h1>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Tour</th>
                <th>Knowledge Level</th>
                <th>Language Spoken</th>
                <th>Gender</th>
                <th>Date Created</th>
                <th>Date Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select_ft = "SELECT * FROM `farmtours` ORDER BY datecreated DESC";
            $sel_ft_res = $conn->query($select_ft);
            $sn = 0;
            if ($sel_ft_res->num_rows > 0) {
                while($sel_ft_row = $sel_ft_res->fetch_assoc()) {
                    $sn++;
            ?>
            <tr>
                <td><?php echo $sn; ?>.</td>
                <td><?php echo $sel_ft_row["name"]; ?></td>
                <td><?php echo $sel_ft_row["email"]; ?></td>
                <td><?php echo $sel_ft_row["phone"]; ?></td>
                <td><?php echo $sel_ft_row["date_of_tour"]; ?></td>
                <td><?php echo $sel_ft_row["knowledge_level"]; ?></td>
                <td><?php echo $sel_ft_row["language_spoken"]; ?></td>
                <td><?php echo $sel_ft_row["gender"]; ?></td>
                <td><?php echo $sel_ft_row["datecreated"]; ?></td>
                <td><?php echo $sel_ft_row["dateupdated"]; ?></td>
                <td>
                    <a href="edit_farmtour.php?farmtourId=<?php echo $sel_ft_row["farmtourId"]; ?>" class="edit_btn">Edit/Delete</a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='11'>No farm tours found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

