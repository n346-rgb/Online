<?php      
    $host = "localhost";  
    $user = "root";  
    $studentpassword = '';  
    $db_name = "online";  
      
    $con = mysqli_connect($host, $user, $studentpassword, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 