<?php

    $connection = new mysqli('localhost', '300177027', '@Nayomi2003', 'db300177027');

    if(!$connection){
    echo 'Welcome to UFV server';
    }

    if(!mysqli_select_db($connection, 'db300177027')){
    echo 'Saved to UFV database';
    }

    
    $student_code = $_POST['student_code'];
    
    $class_code = $_POST['class_code'];
    

    

    $sql = "INSERT INTO Sales_Tracker (student_code, class_code) VALUES ('$student_code', '$class_code')";
    
     

     
    
     
    
     
    
     
    
    
    if (!mysqli_query($connection, $sql)){
    echo 'Invalid Entry.';
    }
    else{
    echo '<a href="sales.php">Return</a>';
    }

    header("refresh:1; url=sales.php");



?>