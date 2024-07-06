<?php
require_once "includes/db_connect.php";
include_once "Template/header.php";
include_once "Template/nav.php";

$productId = mysqli_real_escape_string($conn, $_GET["productId"]);

$spot_prd = "SELECT * FROM `products` WHERE productId = '$productId' LIMIT 1";
$spot_prd_res = $conn->query($spot_prd);
$spot_prd_row = $spot_prd_res->fetch_assoc();

if(isset($_POST["update_product"])){
    $productId = mysqli_real_escape_string($conn, $_POST["productId"]);
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $productname = mysqli_real_escape_string($conn, $_POST["product_name"]);
    $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);

    $update_product = "UPDATE products SET sender_name = '$fullname', sender_email = '$email', phone_number = '$phone', 
    product_name = '$productname', quantity = '$quantity', price = '$price', description = '$description'
    WHERE productId='$productId' LIMIT 1";

    if ($conn->query($update_product) === TRUE) {
        header("Location: view_order.php");
        exit();
    } else {
        echo "Error: " . $update_product . "<br>" . $conn->error;
    }
}
?>

<div class="header">
    <h1>Edit Product Order</h1>
</div>

<div class="content">
    <h1>Edit Product Order</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="product_form">
        <input type="hidden" name="productId" value="<?php print $spot_prd_row["productId"]; ?>">
        <div class="form-group">
            <label for="fullname">Fullname:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Fullname" required value="<?php print $spot_prd_row["sender_name"]; ?>">
        </div>
        <div class="form-group">
            <label for="email_address">Email Address:</label>
            <input type="text" id="email_address" name="email_address" placeholder="Email address" required value="<?php print $spot_prd_row["sender_email"]; ?>">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Phone number" required value="<?php print $spot_prd_row["phone_number"]; ?>">
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" placeholder="Product name" required value="<?php print $spot_prd_row["product_name"]; ?>">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity" placeholder="Quantity" required value="<?php print $spot_prd_row["quantity"]; ?>">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" placeholder="Price" required value="<?php print $spot_prd_row["price"]; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" placeholder="Description" required><?php print $spot_prd_row["description"]; ?></textarea>
        </div>
        <input type="submit" name="update_product" value="Update Product">
    </form>
</div>

<?php include_once "Template/footer.php"; ?>
