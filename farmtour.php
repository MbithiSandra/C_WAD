<?php require_once "includes/db_connect.php"; ?>
<?php include_once "Template/header.php"; ?>

<?php
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_of_tour = $_POST['date'];
    $knowledge_level = $_POST['level'];
    $language_spoken = $_POST['language'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO farmtours (name, email, phone, date_of_tour, knowledge_level, language_spoken, gender) 
            VALUES ('$name', '$email', '$phone', '$date_of_tour', '$knowledge_level', '$language_spoken', '$gender')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_farmtour.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        $(document).ready(function() {
            function refreshSchedule() {
                $.ajax({
                    url: 'get_schedule.php',
                    type: 'GET',
                    success: function(response) {
                        $('#schedule_table').html(response);
                    }
                });
            }

            // Load schedule only when the button is clicked
            $('#load_schedule_btn').click(function() {
                refreshSchedule();
            });
        });
    </script>
   

<?php include_once "Template/nav.php"; ?>

<h2>Information about the farm tours</h2>
<p>The farm organizes farm tours and trainings for farmers and potential customers. It also hosts seminars and workshops for different companies.</p>

<h2>Schedule and Pricing</h2>
<button id="load_schedule_btn">Load Training Schedule</button>
<div class="table-responsive">
        <table id="schedule_table" class="table table-striped table-bordered">
            <!-- Schedule will be loaded dynamically here -->
        </table>
    </div>
    

<section class="home-about">
    <div class="image">
        <video width="1000" height="300" autoplay muted controls loop>
            <source src="http://localhost/C_WAD/Images/mixkit-calves-feeding-in-a-meadow-with-grass-41404-medium.mp4">
            <source src="C:/Users/mbith/OneDrive/Desktop/Construction project/images/about-vid.ogg" type="video/ogg">
        </video>
    </div>

    <h2>Booking Form</h2>
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
                    <span>date of tour :</span>
                    <input type="date" name="date">
                </div>
            </div>

            <label for="knowledge">knowledge level of farming:</label>
            <div>
                <label for="Basic">Basic knowledge</label>
                <input type="radio" id="Basic" name="level" value="Basic">
            </div>
            <div>
                <label for="Intermediate">Intermediate knowledge</label>
                <input type="radio" id="Intermediate" name="level" value="Intermediate">
            </div>
            <div>
                <label for="Advanced">Advanced knowledge</label>
                <input type="radio" id="Advanced" name="level" value="Advanced">
            </div>
            <br><br>
            <label for="Basic">Language spoken:</label>
            <div>
                <label for="Swahili">Swahili</label><br>
                <input type="radio" id="Swahili" name="language" value="Swahili">
            </div>
            <div>
                <label for="English">English</label><br>
                <input type="radio" id="English" name="language" value="English">
            </div>
            <div>
                <label for="Spanish">Spanish</label><br>
                <input type="radio" id="Spanish" name="language" value="Spanish">
            </div>
            <div>
                <label for="Japanese">Japanese</label><br>
                <input type="radio" id="Japanese" name="language" value="Japanese">
            </div>
            <br><br>
            <select name="gender">
                <option value="">---Select Gender---</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Rather not say">Rather not say</option>
            </select>

            <button type="button" id="clearChoice">Clear my choice</button>

            <script>
                document.getElementById('clearChoice').addEventListener('click', function() {
                    // Get all radio buttons with name="level"
                    var radios = document.getElementsByName('level');
                    for (var i = 0; i < radios.length; i++) {
                        radios[i].checked = false;
                    }
                    // Get all radio buttons with name="language"
                    var languageRadios = document.getElementsByName('language');
                    for (var j = 0; j < languageRadios.length; j++) {
                        languageRadios[j].checked = false;
                    }
                    // Clear the gender select
                    document.querySelector('select[name="gender"]').selectedIndex = 0;
                });
            </script>

            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
</section>

<?php include_once "Template/footer.php"; ?>       
