<?php
require_once "includes/db_connect.php";

$select_employees = "SELECT * FROM employee";
$result = $conn->query($select_employees);

if ($result->num_rows > 0) {
    echo '<table class="table table-striped">';
    echo '<thead class="thead-dark">
            <tr>
                <th>Employee ID</th>
                <th>Full Name</th>
                <th>Date of Birth</th>
                <th>Job Title</th>
                <th>Employment Status</th>
            </tr>
          </thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['EmployeeID'] . '</td>
                <td>' . $row['Fullname'] . '</td>
                <td>' . $row['DateOfBirth'] . '</td>
                <td>' . $row['JobTitle'] . '</td>
                <td>' . $row['EmploymentStatus'] . '</td>
              </tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>No employees found.</p>';
}

$conn->close();
?>
