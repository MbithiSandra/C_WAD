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
       

        $update_product = "UPDATE products SET sender_name = '$fullname', sender_email = '$email',phone_number = '$phone', 
        product_name = '$productname', quantity = '$quantity', price = '$price', description = '$description'
         WHERE productId='$productId' LIMIT 1";
      
        if ($conn->query($update_product) === TRUE) {
            header("Location: view_products.php");
            exit();
        } else {
            echo "Error: " . $update_product . "<br>" . $conn->error;
        }
    }
?>

<div class="header">
    <h1>Update Product order</h1>
</div>
        
<div class="row">
    <div class="content">
    <h1>Update product order</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="product_form">
    <form class="form">
              <div class="form-group">
                      <label for="productName">Fullname:</label>
                      <input type="text" id="productName" name="productName" required>
                  </div>
                  <div class="form-group">
                      <label for="productName">Email Address:</label>
                      <input type="text" id="productName" name="productName" required>
                  </div>
                  <div class="form-group">
                      <label for="productName">Phone number:</label>
                      <input type="text" id="productName" name="productName" required>
                  </div>
                  <div class="form-group">
                      <label for="productName">Product Name:</label>
                      <input type="text" id="productName" name="productName" required>
                  </div>
                  <div class="form-group">
                      <label for="quantity">Quantity:</label>
                      <input type="text" id="quantity" name="quantity" required>
                  </div>
                  <div class="form-group">
                      <label for="unitPrice">Price:</label>
                      <input type="number" id="unitPrice" name="unitPrice" required>
                  </div>
                  <div class="form-group">
                      <label for="description">Description:</label>
                      <textarea id="description" name="description" rows="4" required></textarea>
                  </div>
                  
    <input type="submit" name="update_message" value="Update Message" >
    <input type="hidden" name="productId" value="<?php print $spot_prd_row["productId"]; ?>" >
                
              </form>
        </div>
    </div>
    
        
      
<?php include_once "Template/footer.php" ;?>