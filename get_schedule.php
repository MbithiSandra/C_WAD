<?php
require_once "includes/db_connect.php";

$select_schedule = "SELECT * FROM trainer";
$result = $conn->query($select_schedule);

if ($result->num_rows > 0) {
    echo '<thead class="thead-dark">
            <tr>
                <th>Guest Name</th>
                <th>Guide/Trainer Name</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Total Price</th>
            </tr>
          </thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['Trainee_name'] . '</td>
                <td>' . $row['TrainerName'] . '</td>
                <td>' . $row['Time_in'] . '</td>
                <td>' . $row['Time_out'] . '</td>
                <td>---</td>
              </tr>';
    }
    echo '</tbody>';
} else {
    echo '<tr><td colspan="5">No schedule available</td></tr>';
}

$conn->close();

