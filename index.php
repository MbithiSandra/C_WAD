<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="/CSS/FARM.CSS">
</head>
<body style="background-image: url(Images/background13.jpeg);">
    <!-- header section starts -->
    <?php include_once("Template/nav.php"); ?>
    
    <h2>WELCOME</h2>
    <p>At Kyase Ranch, we're more than just a farm. We're a community dedicated to sustainable agriculture and connecting people with the beauty of the countryside. Nestled in the heart of Makueni, our ranch is a sanctuary where animals roam freely, and the land flourishes with abundance.</p>
    
    <!-- Chapter 2 starts here -->
    <p>Step into our world and experience the sights, sounds, and scents of rural life. Whether you're a nature enthusiast, a food lover, or simply seeking a tranquil escape, you'll find a warm welcome here.</p>
    <!-- Chapter 2 ends here -->
    
    <!-- home section starts -->
    <section class="home-projects">
        <h1 class="Heading-title">Featured</h1>
        <div class="container-fluid text-center bg-grey">
            <h4>Entailed in our farms is:</h4>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/farm1.jpg" alt="Farm Tours">
                        <p><strong>Farm Tours</strong></p>
                        <p>We offer in-depth farm tours of our ranch to our customers, suppliers.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/farm2.jpg" alt="Farming Tips">
                        <p><strong>Farming Tips and Overview of the Farm</strong></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/goat2.jpg" alt="Animals Kept">
                        <p><strong>Animals Kept</strong></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/eggs1.jpg" alt="Products">
                        <p><strong>Products</strong></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="load-more"><a href="animals.php" class="btn">Load More</a></div>
            </div>
        </div>
    </section>
    <!-- home section ends -->
    
    <section class="home-about">
        <div class="image">
            <video width="320" height="240" autoplay muted controls loop>
                <source src="/Images/mixkit-goat-feeding-in-the-grass-34832-medium.mp4" type="video/mp4">
                <source src="/Images/about-vid.ogg" type="video/ogg">
            </video>
        </div>
    </section>
</body>
</html>
