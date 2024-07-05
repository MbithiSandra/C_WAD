<?php include_once"Template/header.php";?> 
    <!-- header section starts -->


    <?php include_once "Template/nav.php";?> 

    <section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(Images/pexels-gnist-706498.jpg) no-repeat">
                <div class="content">
                    <span>Growing Goodness</span>
                    <h3>One Seed at a Time</h3>
                    <a href="products.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(Images/pexels-gnist-706498.jpg) no-repeat">
                <div class="content">
                    <span>Rooted in Tradition </span>
                    <h3>Growing for the Future</h3>
                    <a href="products.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(Images/pexels-gnist-706498.jpg) no-repeat">
                <div class="content">
                    <span>Your Local Farm Adventure</span>
                    <h3>Experience the Farm Life</h3>
                    <a href="products.php" class="btn">Discover More</a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
    

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
                <source src="http://localhost/C_WAD/Images/mixkit-goat-feeding-in-the-grass-34832-medium.mp4" type="video/mp4">
                <source src="/Images/about-vid.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <?php include_once("Template/footer.php");?> 
  

</body>
</html>
