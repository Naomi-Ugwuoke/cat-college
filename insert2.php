<?php

    $connection = new mysqli('localhost', '300177027', '@Nayomi2003', 'db300177027');

    if(!$connection){
    echo 'Welcome to UFV server';
    }

    if(!mysqli_select_db($connection, 'db300177027')){
    echo 'Saved to UFV database';
    }

    
    $student_code = $_POST['student_code'];
    
    $student_name = $_POST['student_name'];
    $student_address = $_POST['student_address'];
    $student_city = $_POST['student_city'];
    $student_prov = $_POST['student_prov'];

    $student_zip = $_POST['student_zip'];
   

    

    $sql = "INSERT INTO Students (student_code, student_name, student_address, student_city, student_prov, student_zip) VALUES ('$student_code', '$student_name', '$student_address', '$student_city', '$student_prov', '$student_zip')";
    
     

     
    
     
    
     
    
     
    
    
    if (!mysqli_query($connection, $sql)){
    echo 'Invalid Entry.';
    }
    else{
    echo '<a href="registration.php">Return</a>';
    }

    header("refresh:1; url=registration.php");



?>