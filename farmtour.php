<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farm Tours</title>
         <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- custom css file link -->
    <link rel="stylesheet" href="CSS/FARM.CSS">
    <style>
    
    </style>
    <!--th:table header-->
    <!--tr:nth-child(odd)=table row-->
    </head>
    <body style="background-image: url(Images/background13.jpeg);">

 <!-- header section starts -->


 
        <!-- header section starts -->


        <section class="header">
            <nav>
                <div class="logo">KYASERANCH</div>
                <label for="menu-btn" class="menu-icon"><i class="fas fa-bars"></i></label>
                <input type="checkbox" id="menu-btn">
                <ul>
                  
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="animals.html">OUR ANIMALS</a></li>
                    <li><a href="products.html">PRODUCTS</a></li>
                    <li><a href="farmtour.html">FARMTOURS</a></li>
                    <li><a href="contactus.html">CONTACT</a></li>
                    <li><a href="blog.html">BLOG/NEWS</a></li>
                    <li><a href="login.html" >LOGIN</a></li>
                </ul>
            </nav>
        </section>
        
        <h2>Information about the farm tours</h2>
        <p>The farm organizes farm tours and trainings for farmers and potential customers. It
            also hosts seminars and workshops for different companies </p>

            <h2>Schedule and Pricing</h2>
         <table >
             <tr>
                 <th>Guest Name</th>
                 <th>Guide/Trainer Name</th>
                 <th>Time In </th>
                 <th>Time out</th>
                 <th>Total Price</th>
             </tr>
 
             <tr>
                 <td>Sharon Njeru</td>
                 <td>Maureen Mueni</td>
                 <td>8:00am</td>
                 <td>11:00am</td>
                 <td>3000 ksh</td>
             </tr>
 
             <tr>
                 <td>Crystal Marie</td>
                 <td>Cyrus Ochieng'</td>
                 <td>4:00pm</td>
                 <td>7:00pm</td>
                 <td>4000 Ksh</td>
             </tr>
 
             <tr>
                 <td>Allan Maxwell</td>
                 <td>Sabrina Elavuna</td>
                 <td>12:00pm</td>
                 <td>4:00pm</td>
                 <td>5000 Ksh</td>
             </tr>
 
             <tr>
                 <td>Jake Kalix</td>
                 <td>Luna Devi</td>
                 <td>9:00am</td>
                 <td>12:00pm</td>
                 <td>3000 Ksh</td>
             </tr>
 
             
         </table>

         <section class="home-about">
            <div class="image">
                <video width="1000" height="300" autoplay muted controls loop>
                    <source src="C:\xampp\htdocs\C_WAD\Images\mixkit-calves-feeding-in-a-meadow-with-grass-41404-medium.mp4">
                    <source src="C:\Users\mbith\OneDrive\Desktop\Construction project\images\about-vid.ogg"
                    type="video/ogg">
                </video>
            </div>

        <h2>Booking Form</h2>
        <!-- booking section starts -->
 <section class="booking">
    <h2 class="heading-title">Book Now</h2>

    <form method="post" class="book-form">


        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>location :</span>
                <input type="text" placeholder="location" name="location">
            </div>
            <div class="inputBox">
                <span>date :</span>
                <input type="date"  name="date">
            </div>
        </div>

        
        <label for="Basic">Basic knowledge</label>
         <input type="radio" id="Basic" name="level" placeholder="">

         <label for="Intermediate">Intermediate knowledge</label>
         <input type="radio" id="Intermediate" name="level" placeholder="">

        <label for="Advanced">Advanced knowledge</label>
         <input type="radio" id="Advanced" name="level" placeholder="">
<br><br>

        <input type="checkbox" id="Swahili" value="Swahili" name="Swahili">
        <label for="Swahili">Swahili</label><br>
        <input type="checkbox" id="English" value="English" name="English">
        <label for="English">English</label><br>
        <input type="checkbox" id="Spanish" value="Spanish" name="Spanish">
        <label for="Spanish">Spanish</label><br>
        <input type="checkbox" id="Japanese" value="Japanese" name="Japanese">
        <label for="Japanese">Japanese</label><br>

        <select name="" id="">
            <option value="">---Select Gender-</option>
            <option value="1">Female</option>
            <option value="2">Male</option>
            <option value="3">Rather not say</option>
        </select>

        <input type="submit" value="submit" class="btn" name="send">

    </form>
 </section>

   <!-- booking section ends -->
 
        