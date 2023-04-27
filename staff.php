<!DOCTYPE>
<html>
    <head>
        <title>
        Staff
        </title>
        <script src='jquery-3.2.1.js'></script>
        <link rel="stylesheet" href="style.css">
        <style>
            #pad {
                background:#000;
                border :1px solid #fff;
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

            <!--About section-->  
            <div class="w3-row w3-padding-64" id="about">
                

                
            <hr>

            <!-- Employees php -->
            <div class="w3-row w3-padding-64" id="menu">
                <div class="w3-col l6 w3-padding-large">
                <h2>List Of Staff Members</h2>
                <div id="phpselect">

                <?php
                

                $connection = new mysqli('localhost', '300177027', '@Nayomi2003', 'db300177027');
                if (!$connection->connect_errno) {
                    $sql = "SELECT * FROM Employees";
                    if ($rs = $connection->query($sql)) {
                        while ($r = $rs->fetch_assoc()) {
                            echo "<p>${r['employee_name']} \n: ${r['employee_code']}</p>";
                        }
                        $rs->free();
                    }
                    $connection->close();
                }

                ?>
                    
              
                    
                </div>    
                </div>
                
                <div class="w3-col l6 w3-padding-large">
                    <img src="images/read.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
                </div>

                
            </div>

            <hr>

            <!-- Input Section -->
            <div class="w3-container w3-padding-64" id="form">

                <h1>Information Entry</h1><br>
                <p>All staff members, please fill in the following information about yourselves.</p>
                <hr>

                <form id='form' action="insert.php" method="POST">
                    
                <p>Employee Name: <input class="w3-input w3-padding-16" id='employee_name' type="text" name='employee_name'></p>
                <p>Employee Code: <input class="w3-input w3-padding-16" id='employee_code' type="number" name='employee_code'></p>
                <p>Employee Pay: <input class="w3-input w3-padding-16" id='employee_pay' type="number" name='employee_pay'></p>


                    <!-- Submit button -->
                    
                    <p><input class="w3-button w3-dark-grey w3-text-white w3-section" type='submit' value="Submit"></p>
                </form>




            </div>
            <hr>
            


        <script>
            $('#form').submit(function() {
                if ($('#employee_name').val() == '' ||
                    $('#employee_code').val() == 0) {
                    alert('Invalid entry')
                    return false
                }
            })
        </script>

        </div>
        


       
            


        <footer class="w3-center w3-light-grey w3-padding-32">
            <p>Name: Ugwuoke Naomi</p>
            <p>Student ID: 300177027</p>
        </footer>

    </body>
</html>