<!DOCTYPE>
<html>

<head>
    <title>
        Courses
    </title>
    <script src='jquery-3.2.1.js'></script>
    <link rel="stylesheet" href="style.css">
    <style>
        #pad {
            background: #000;
            border: 1px solid #fff;
            color: blue;
        }
    </style>

</head>

<body>


    <!--This is the top menu-->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="#" class="w3-bar-item w3-button">CAT COLLEGE</a>

            <div class="w3-right w3-hide-small">

                <a href="index.html" class="w3-bar-item w3-button">Home</a>
                <a href="staff.php" class="w3-bar-item w3-button">Staff</a>
                <a href="registration.php" class="w3-bar-item w3-button">Registration</a>
                <a href="courses.html" class="w3-bar-item w3-button">Courses</a>
                <a href="sales.php" class="w3-bar-item w3-button">Sales</a>
                <a href="classes.php" class="w3-bar-item w3-button">Classes</a>
                <a href="vendor.php" class="w3-bar-item w3-button">Vendor</a>



            </div>
        </div>
    </div>



    

    <div class="w3-content" style="max-width:1100px">

<hr>
<hr>
<h2> List of Classes Available</h2>

        <div class="w3-container ">
            
            <div id="phpselect">

            
        

                <?php
                

                $connection = new mysqli('localhost', '300177027', '@Nayomi2003', 'db300177027');
                if (!$connection->connect_errno) {
                    $sql = "SELECT * FROM Classes";
                    if ($rs = $connection->query($sql)) {
                        while ($r = $rs->fetch_assoc()) {
                            echo "<p>${r['class_name']} \n: ${r['class_code']}</p>";
                        }
                        $rs->free();
                    }
                    $connection->close();
                }

                ?>
            </div>


        </div>


    </div>




    <div class="w3-content" style="max-width:1100px">

        

        <div class="w3-container w3-padding-64" id="form">

            <!-- Change background color -->

            <script>
                $(document).ready(function() {
                    $("input").focus(function() {
                        $(this).css("background-color", "yellow");
                    });
                    $("input").blur(function() {
                        $(this).css("background-color", "red");
                    });
                });
            </script>


            <form id='form' action="insert4.php" method="POST">
                <h2>Students, use the form below to register for Cat College</h2>


                <p>Class Name: <input class="w3-input w3-padding-16" id='class_name' type="text" name='class_name'></p>
                <p>Class Code: <input class="w3-input w3-padding-16" id='class_code' type="number" name='class_code'></p>
                <p>Checkin time: <input class="w3-input w3-padding-16" id='checkin_time' type="text" name='checkin_time'></p>
                <p>Checkout time: <input class="w3-input w3-padding-16" id='checkout_time' type="text" name='checkout_time'></p>
                <p>Billing amount: <input class="w3-input w3-padding-16" id='billing_amount' type="text" name='billing_amount'></p>
                


                <!-- Submit button -->

                <p><input class="w3-button w3-dark-grey w3-text-white w3-section" type='submit' value="Submit"></p>
            </form>





        </div>
        <hr>




        <script>
            $('#form').submit(function() {
                if ($('#class_name').val() == '' ||
                    $('#class_code').val() == 0)) {
                    alert('Fill in all empty spaces')
                    return false
                }
            })
        </script>

    </div>



    <footer class="w3-center w3-light-grey w3-padding-32">
        <p>Name: Ugwuoke Naomi</p>
        <p>Student ID: 300177027</p>
        <div>
            <div>

                <!-- Last modified -->
                <h5>Last Modified:
                    <span class="w3-opacity">
                        <script>
                            document.write(document.lastModified);
                        </script>
                    </span>
                </h5>
                <hr>
            </div>
    </footer>

</body>

</html>