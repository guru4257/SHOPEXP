<?php      
    include('signup.php');  
    $name = $_POST['name'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $name = stripcslashes($name);  
        $password = stripcslashes($password);  
        $name = mysqli_real_escape_string($con, $name);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where name = '$name' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
