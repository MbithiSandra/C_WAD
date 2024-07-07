<?php require_once "Template/header.php"; ?>
<?php include_once "Template/nav.php"; ?>

<!-- Header section ends -->

<h1>About Us</h1>

<h2>History</h2>
<p>The farm began as a 100-acre farm inherited by the owner from their father, an ancestral land that has been in the family since time immemorial. The first animals were brought to the farm in 2003, and since then, the farm has grown significantly.</p>

<h2>Information about the farm</h2>
<p>The farm currently accommodates over 400 animals of various kinds, including sheep, goats, chickens, cows, and bees. The ranch employs over 50 workers, with 80% from neighboring villages. We also host farm tours and training sessions to assist other farmers in achieving similar success. Additionally, we sell various products derived from our animals and crops grown on our ranch.</p>

<h2>Mission Statement</h2>
<p>At Kyase Ranch, our mission is to cultivate a sustainable and harmonious relationship between people, animals, and the land. We are committed to ethical farming practices, integrating technology, and engaging with the community.</p>

<section class="home-about">
<div class="image">
        <video width="1200" height="400" autoplay muted controls loop>
            <source src="http://localhost/C_WAD/Images/mixkit-small-farmer-town-in-the-countryside-32466-medium.mp4">
            <source src="C:/Users/mbith/OneDrive/Desktop/Construction project/images/about-vid.ogg" type="video/ogg">
        </video>
    </div>
    <h1>Our Employees</h1>
    <button id="load_employees_btn">Load Employees</button>
    <div id="employee_table">
        <!-- Employee table will be loaded here -->
    </div>
    <div id="employee_table">
        <!-- Employee table will be loaded dynamically here -->
    </div>
</section>

<section class="home-projects">
    <h1 class="Heading-title">Featured</h1>
    <!-- Featured projects section content -->
</section>

<h2>Bees</h2>
<p>The bees are kept in well-built beehives.</p>
<div class="image">
    <video width="1200" height="400" autoplay muted controls loop>
        <source src="http://localhost/C_WAD/Images/mixkit-bees-flying-on-a-poultry-farm-4768-medium.mp4">
        <source src="C:/Users/mbith/OneDrive/Desktop/Construction project/images/about-vid.ogg" type="video/ogg">
    </video>
</div>

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
   

<?php include_once "Template/footer.php"; ?>