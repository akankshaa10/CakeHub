<!DOCTYPE html>
<html>
<head>
    <title>Authenticate</title>
</head>
<body>
<?php      
    include('connection.php');
    $usertype = $_POST['utype']; 
    $username = $_POST['fname'];  
    $password = $_POST['passw'];  
      
        //to prevent from mysqli injection  
        $usertype = stripcslashes($usertype); 
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $usertype = mysqli_real_escape_string($con, $usertype); 
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from register where utype='$usertype' and fname = '$username' and passw = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo '<script>alert("")</script>';
            if($usertype=='user') 
            {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login successful as user');
     window.location.assign('cake.php');
    
    
    </script>"); 
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login successful as admin');
     window.location.assign('admin.php');
    
    
    </script>");
        }

            
        }  
        else{  
            echo ('<script>alert("Login failed. Invalid username or password.");
                window.location.assign("login.php");</script>');  
        }   
        // window.location.href = 'file:///C:/xampp/htdocs/CSS%20programs/cake.html';  
?>  
</body>
</html>
