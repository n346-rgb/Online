<?php      
    include('connection.php');  
    $studentusername = $_POST['user'];  
    $studentpassword = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($studentusername);  
        $password = stripcslashes($studentpassword);  
        $username = mysqli_real_escape_string($con, $studentusername);  
        $password = mysqli_real_escape_string($con, $studentpassword);  
      
        $sql = "select *from bgr where studentusername = '$studentusername' and studentpassword = '$studentpassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center>  Student Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  