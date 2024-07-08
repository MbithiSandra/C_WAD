<?php include_once "Template/header.php";?> 
    <!-- header section starts -->


    <?php include_once "Template/nav.php";?> 

 

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/slider2.jpg" class="d-block w-100" style="width:600px; height:470px;" alt="photo1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fresh, Fun, and Farm-Tastic!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/slider3.jpg" class="d-block w-100" style="width:600px; height:470px;" alt="photo2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cultivating Joy, One Crop at a Time</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/slider4.jpg" class="d-block w-100" style="width:600px; height:470px;" alt="photo3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bringing the Farm to Your Table</h5>
                </div>
            </div>
            <div class="carousel-item">
    <video autoplay muted loop class="d-block w-100">
        <source src="Images/slider1.mp4" type="video/mp4">
        <source src="Images/about-vid.ogg" type="video/ogg">
        Your browser does not support the video given.
    </video>
    <div class="carousel-caption d-none d-md-block">
        <h5>Experience the Farm Life</h5>
    </div>
</div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    
    <div class="home-about">
    <div class="image">
            <video width="520" height="240" autoplay muted controls loop>
                <source src="http://localhost/C_WAD/Images/mixkit-goat-feeding-in-the-grass-34832-medium.mp4" type="video/mp4">
                <source src="/Images/about-vid.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    <div class="content">
    <h3>WELCOME</h3>
    <p>At Kyase Ranch, we're more than just a farm. We're a community dedicated to sustainable agriculture and 
        connecting people with the beauty of the countryside. Nestled in the heart of Makueni, our ranch is a 
        sanctuary where animals roam freely, and the land flourishes with abundance.</p>
        <a href="about.php" class="btn">Read More</a>
     </div>
    
    </div>

    
    
    <!-- home section starts -->
    <section class="home-projects">
        <h1 class="Heading-title"></h1>
        <div class="container-fluid text-center bg-grey">
            <h4>What we offer:</h4>
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
                        <p>Our trainers are always ready to offer guidance</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/events1.jpg" alt="Animals Kept">
                        <p><strong>Events</strong></p>
                        <p>We host all kinds of events on our ranch.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img class="fixed-size" src="Images/eggs1.jpg" alt="Products">
                        <p><strong>Products</strong></p>
                        <p>We are among the top 5 distributors countrywide</p>
                    </div>
                </div>
                <div class="load-more"><a href="products.php" class="btn">Load More</a></div>
            </div>
        </div>
    </section>

    <?php include_once "Template/footer.php";?> 
   
  

</body>
</html>
