<?php

    $connection = new mysqli('localhost', '300177027', '@Nayomi2003', 'db300177027');

    if(!$connection){
    echo 'Welcome to UFV server';
    }

    if(!mysqli_select_db($connection, 'db300177027')){
    echo 'Saved to UFV database';
    }

    
    $employee_code= $_POST['employee_code'];
    $employee_name= $_POST['employee_name'];
    $employee_pay= $_POST['employee_pay'];
    

    

    $sql = "INSERT INTO Employees(employee_code, employee_name, employee_pay) VALUES ('$employee_code', '$employee_name', '$employee_pay')";
    
     

     
    
     
    
     
    
     
    
    
    if (!mysqli_query($connection, $sql)){
    echo 'Invalid Entry.';
    }
    else{
    echo '<a href="staff.php">Return</a>';
    }

    header("refresh:1; url=staff.php");



?>