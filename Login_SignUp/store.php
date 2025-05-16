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
if(isset($_POST['submit'])){
    include_once "connection.php";
    include_once "function.php";

// Sanitize input values to prevent SQL Injection
$fName =  mysqli_real_escape_string($connect,$_POST['fName']);
$lName = mysqli_real_escape_string($connect, $_POST['lName']);
$mail = mysqli_real_escape_string($connect, $_POST['mail']);
$pass = mysqli_real_escape_string($connect, $_POST['pass']);
$repass = mysqli_real_escape_string($connect,$_POST['repass']);


$invalidEmail=invalidEmail($mail);
$pwdMatch=pwdMatch($pass,$repass);


//checking correctness of user enter data
 

if ($invalidEmail !== false) {
     
    echo "<script>
    swal({  
        title: 'Oops!',  
        text: 'Please Enter Valid Email Address!',  
        icon: 'error',  
        button: 'Ok',  
    }).then(() => {
        window.history.back();
    });
    </script>";
    exit();
}

if($pwdMatch !== false){
    /*header("location:./Sign up.php?error=paswordDoesn'tmatch");*/
    echo "<script>
    swal({  
        title: 'Oops!',  
        text: 'Passwords Are Does not matched!',  
        icon: 'error',  
        button: 'Ok',  
    }).then(() => {
        window.history.back();
    });
    </script>";
    
    exit();
}
// Check if email already exists
$verify_mail = mysqli_query($connect, "SELECT eMail FROM userDetails WHERE eMail='$mail'");
// Use mysqli_num_rows to check if any rows were returned
if (mysqli_num_rows($verify_mail) != 0) {
   /* echo "<div class='msg'>
            <p>This mail is already in use. Try another one.</p>
          </div><br>";
    echo "<a href='javascript:self.history.back()'>
            <button>Go back to home page</button>
          </a>";*/
          echo "<script>
          swal({  
              title: 'Oops!',  
              text: 'Email that you are entered is already exist!',  
              icon: 'error',  
              button: 'Ok',  
          }).then(() => {
              window.history.back();
          });
          </script>";
          
          exit();
     
} else {
    // Insert new record

    $secure_pass = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO userDetails(firstname,lastName,eMail, password) VALUES ('$fName', '$lName', '$mail','$secure_pass')";

    if (mysqli_query($connect, $sql)) {
       /* echo "<div>
                <p>Registration successful</p>
              </div>";
        echo "<a href='login.php'><button>Log in now</button></a>";*/

        echo "<script>
        swal({  
            title: 'Welcome!',  
            text: 'Registration Successful!',  
            icon: 'success',  
            button: 'Login',  
        }).then(() => {
            window.location.href = 'login.php';
        });
        </script>";
        
        exit();
    } else {
        echo "<script>
        swal({  
            title: 'Oops!',  
            text: 'Registraion Failed. Please try  again later!',  
            icon: 'error',  
            button: 'Ok',  
        }).then(() => {
            window.history.back();
        });
        </script>";
        
        exit();
    }
    }


// Close the database connection
mysqli_close($connect);

}
else{

    header('location:./login.php');

}

?>

</body>
</html>