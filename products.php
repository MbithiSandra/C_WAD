<?php
require_once "includes/db_connect.php";
include_once "Template/header.php";
include_once "Template/nav.php";

if (isset($_POST["send_product"])) {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $productname = mysqli_real_escape_string($conn, $_POST["product_name"]);
    $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);

    $insert_product = "INSERT INTO products (sender_name, sender_email, phone_number, product_name, quantity, price, description) 
                       VALUES ('$fullname', '$email', '$phone', '$productname', '$quantity', '$price', '$description')";

    if ($conn->query($insert_product) === TRUE) {
        header("Location: view_order.php");
        exit();
    } else {
        echo "Error: " . $insert_product . "<br>" . $conn->error;
    }
}
?>

<div class="header">
    <h1>Order Form</h1>
</div>

<div class="content">
    <h1>Place an Order</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form">
        <div class="form-group">
            <label for="fullname">Fullname:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Fullname" required>
        </div>
        <div class="form-group">
            <label for="email_address">Email Address:</label>
            <input type="email" id="email_address" name="email_address" placeholder="Email address" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Phone number" required>
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" placeholder="Product name" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity" placeholder="Quantity" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" placeholder="Price" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" placeholder="Description" required></textarea>
        </div>
        <input type="submit" name="send_product" value="Place Order">
    </form>
</div>

<?php include_once "Template/footer.php"; ?>
