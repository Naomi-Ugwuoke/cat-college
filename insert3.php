<?php

    $connection = new mysqli('localhost', '300177027', '@Nayomi2003', 'db300177027');

    if(!$connection){
    echo 'Welcome to UFV server';
    }

    if(!mysqli_select_db($connection, 'db300177027')){
    echo 'Saved to UFV database';
    }

    
    $vendor_code = $_POST['vendor_code'];
    
    $item_name = $_POST['item_name'];
    $item_cost = $_POST['item_cost'];
    
   

    

    $sql = "INSERT INTO Inventory (vendor_code, item_name, item_cost) VALUES ('$vendor_code', '$item_name', '$item_cost')";
    
     

     
    
     
    
     
    
     
    
    
    if (!mysqli_query($connection, $sql)){
    echo 'Invalid Entry.';
    }
    else{
    echo '<a href="vendor.php">Return</a>';
    }

    header("refresh:1; url=vendor.php");



?>