<?php
require_once "includes/db_connect.php";
include_once "Template/header.php";
include_once "Template/nav.php";

if(isset($_GET["DelId"])){
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);
    
    $del_prd = "DELETE FROM `products` WHERE productId='$DelId' LIMIT 1";
    
    if ($conn->query($del_prd) === TRUE) {
        header("Location: view_order.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<div class="header">
    <h1>Products</h1>
</div>

<div class="content">
    <h1>Products List</h1>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select_prd = "SELECT * FROM `products` ORDER BY datecreated DESC";
            $sel_prd_res = $conn->query($select_prd);
            $cm = 0;
            if ($sel_prd_res->num_rows > 0) {
                while($sel_prd_row = $sel_prd_res->fetch_assoc()) {
                    $cm++;
            ?>
            <tr>
                <td><?php print $cm; ?>.</td>
                <td><?php print $sel_prd_row["sender_name"]; ?></td>
                <td><?php print $sel_prd_row["sender_email"]; ?></td>
                <td><?php print $sel_prd_row["phone_number"]; ?></td>
                <td><?php print $sel_prd_row["product_name"]; ?></td>
                <td><?php print $sel_prd_row["quantity"]; ?></td>
                <td><?php print $sel_prd_row["price"]; ?></td>
                <td><?php print $sel_prd_row["description"]; ?></td>
                <td><?php print $sel_prd_row["datecreated"]; ?></td>
                <td>
                    <a href="edit_product.php?productId=<?php print $sel_prd_row["productId"]; ?>" class="edit_btn">Edit</a>
                    <a href="view_order.php?DelId=<?php print $sel_prd_row["productId"]; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='10'>No products found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include_once "Template/footer.php"; ?>
