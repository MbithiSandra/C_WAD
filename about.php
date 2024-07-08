<?php require_once "Template/header.php"; ?>
<?php include_once "Template/nav.php"; ?>

<div class="heading" style="background:url(Images/about2.jpg) no-repeat">
            <h1>About Us</h1>
        </div>



<div class="home-about1">
<div class="content">
        <h3>History</h3>
<p>The farm began as a 100-acre farm inherited by the owner from their father, an ancestral land that has been 
    in the family since time immemorial. The first animals were brought to the farm in 2003, and since then, the 
    farm has grown significantly.</p>
     </div>
</div>
<div class="home-about1">
     <div class="content">
    <h3>Mission Statement</h3>
    <p>At Kyase Ranch, our mission is to cultivate a sustainable and harmonious relationship between people, 
        animals, and the land. We are committed to ethical farming practices, integrating technology, and 
        engaging with the community.</p>
     </div>
</div>

<div class="home-about1">
<div class="content">
        <h3>Our Employees</h3>
<p>We have a great team of employees who are always ready to serve you at all times</p>
    <button id="load_employees_btn">Load Employees</button>
</div>
   
    <div id="employee_table">
        <!-- Employee table will be loaded here -->
    </div>
    <div id="employee_table">
        <!-- Employee table will be loaded dynamically here -->
    </div>

    <div class="home-about1">
    <div class="image">
            <video width="520" height="240" autoplay muted controls loop>
                <source src="http://localhost/C_WAD/Images/mixkit-small-farmer-town-in-the-countryside-32466-medium.mp4" type="video/mp4">
                <source src="/Images/about-vid.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="content">
    <h3>Information about the farm</h3>
    <p>The farm currently accommodates over 400 animals of various kinds, including sheep, goats, chickens, cows, 
        and bees. The ranch employs over 50 workers, with 80% from neighboring villages. We also host farm tours
         and training sessions to assist other farmers in achieving similar success. Additionally, we sell various 
         products derived from our animals and crops grown on our ranch.</p>
     </div>  
    
    </div>

    
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        $(document).ready(function() {
            function refreshEmployees() {
                $.ajax({
                    url: 'get_employees.php',
                    type: 'GET',
                    success: function(response) {
                        $('#employee_table').html(response);
                    }
                });
            }

            // Load employees only when the button is clicked
            $('#load_employees_btn').click(function() {
                refreshEmployees();
            });
        });
    </script>
   
<div>
<?php include_once "Template/footer.php"; ?>
</div>