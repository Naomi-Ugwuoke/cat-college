<?php

    $connection = new mysqli('localhost', '300177027', '@Nayomi2003', 'db300177027');

    if(!$connection){
    echo 'Welcome to UFV server';
    }

    if(!mysqli_select_db($connection, 'db300177027')){
    echo 'Saved to UFV database';
    }

    
    $class_code = $_POST['class_code'];
    
    $class_name = $_POST['class_name'];
    $checkin_time = $_POST['checkin_time'];
    $checkout_time = $_POST['checkout_time'];
    $billing_amount = $_POST['billing_amount'];
    
   

    

    $sql = "INSERT INTO Classes (class_code, class_name, checkin_time, checkout_time, billing_amount) VALUES ('$class_code', '$class_name', '$checkin_time', '$checkout_time', '$billing_amount')";
    
     

     
  
     
    
     
    
    
    if (!mysqli_query($connection, $sql)){
    echo 'Invalid Entry.';
    }
    else{
    echo '<a href="classes.php">Return</a>';
    }

    header("refresh:1; url=classes.php");



?>