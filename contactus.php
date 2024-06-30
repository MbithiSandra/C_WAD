<?php include_once"Template/header.php";?> 
    <!-- header section starts -->


    
        <!-- header section starts -->


        <?php include_once"Template/nav.php";?> 
        <!--contact info-->
        <div class="box">
            <h2>Contact Info</h2>
            <a href="#"> <i class="fas fa-phone"></i>+254712307083</a>
            <a href="#"> <i class="fas fa-phone"></i>+254720416466</a>
            <a href="#"> <i class="fas fa-envelope"></i>KyaseRanch@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i>Nairobi, Kenya</a>
        </div>
        <div class="box">
            <h3>Follow us</h3>
            
            <a href="#"> <i class="fab fa-facebook"></i>Facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
            
        </div>
    </div>

    <div class="header">
    <h1></h1>
</div>
        

    <div class="content">
    <h1>Talk To Us</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form">
        <label for="Fn">Fullname:</label><br>
        <input type="text" name="fullname" id="Fn" placeholder="Fullname" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email_address" placeholder="Email address" required><br><br>
        
        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="eLearning Support">eLearning Support</option>
            <option value="AMS Support">AMS Support</option>
        </select>
        <br><br>
    <label for="ms">Message:</label><br>
    <textarea cols="30" rows="7" name="message" id="ms" required></textarea><br><br>
    <input type="submit" name="send_message" value="Send Message" >
</form>
</div>

                <div class="image">
                    <video width="700" height="300" autoplay muted controls loop>
                        <source src="http://localhost\C_WAD\Images\mixkit-people-working-in-a-call-center-22987-medium.mp4">
                        <source src="C:\Users\mbith\OneDrive\Desktop\Construction project\images\about-vid.ogg"
                        type="video/ogg">
                    </video>
                </div>
    </body>
</html>