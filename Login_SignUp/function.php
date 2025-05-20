<?php
include_once "connection.php";
?>
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



function invalidUname($uName){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$uName)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($mail){
    $result;
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pass,$repass){
    $result;
    if($pass !== $repass){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function checkUser($connect, $email, $pass) {
     $sql = "SELECT password FROM users WHERE eMail = ?;";
     $stmt = $connect->prepare($sql);
     $stmt->bind_param("s",$email);
     $stmt->execute();
     $stmt->store_result();

     if($stmt->num_rows() > 0){

        $stmt->bind_result($stored_hashed_password);
        $stmt->fetch();

        if(password_verify($pass,$stored_hashed_password)){
        //redirect to the index.html
        /*
        $sql2 = "SELECT usertype FROM userdetails WHERE eMail = '$email';";
        $result2 = mysqli_query($connect,$sql2);
        $user = mysqli_fetch_assoc($result2);
        
        if($user['usertype'] == 'admin'){
            echo "<script>alert('You are admin')</script>";
            exit();
        }
        else{
            return true;
            exit();
        }
        */ 
        return true;
        exit();

        }
        else{

            //if password incorrect

            /*echo "<script>alert('Invalid password. Please try again later');
            window.location.href = 'login.php';</script>";*/
            return false;
            exit();

        }

        

     }
     else {
            /*
            echo "<script>alert('Email not found. Please try again later.');
            window.location.href = 'javascript:self.history.back()';</script>";*/

            echo "<script>
          swal({  
              title: 'Oops!',  
              text: 'Email is not exist try another one!',  
              icon: 'error',  
              button: 'Ok',  
          }).then(() => {
              window.history.back();
          });
          </script>";
          
          exit();
        

     }

     $stmt->close();
     $connect->close();
     
}


     




?>
</body>
</html>