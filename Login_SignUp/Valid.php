<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
</head>
<body>
    
<?php
// Database configuration
 include_once "connection.php";
 include_once "function.php";
 $email=$_POST['email'];
 $pass=$_POST['password'];

 $checkUser = checkUser($connect, $email, $pass);

 // Check if user credentials are valid
 if ($checkUser == true) {
    echo "<script>
    swal({  
        title: 'Welcome!',  
        text: 'We are here to help you!',  
        icon: 'success',    
    }).then(() => {
        window.location.href = 'index.html';
    });
    </script>";
     /*header("Location: ./index.html");*/
     exit();
 } else {
    /*
    echo "<script>
        alert('Password Incorrect');
        window.location.href = 'javascript:self.history.back()';
    </script>";
     exit();*/
     
     echo "<script>
          swal({  
              title: 'Oops!',  
              text: 'Password Incorrect!',  
              icon: 'error',  
              button: 'Ok',  
          }).then(() => {
              window.history.back();
          });
          </script>";
          
          exit();
 }
 

 
?>

</body>
</html>