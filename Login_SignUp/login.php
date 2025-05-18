<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Cart/styles.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <style>
      body{
        background: #FF0099;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #493240, #FF0099);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #493240, #FF0099); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
         background-attachment: fixed;
         
      }
         .main-contain{
          background-color: rgb(255, 255, 255);
          font-family: 'Poppins', sans-serif;
          border-radius: 10px;
          margin-top: 7%;
          margin-bottom:7%;
          width:50%;
         }

         
    </style>
</head>
<body>
   <!-- Header -->
    <?php include '../Components/header.php'; ?>
 
       <div class="container main-contain">
        <div class="row gy-5">
          <div class="col-12 text-center">
            <h2>Sign In to Sweet Delights  <text x="30" y="35" font-family="Arial" font-size="24" fill="#d97706">🍰</text></h2>
          </div>
          <div class="col-12 text-center">
            <form action="Valid.php" class="row g-3 needs-validation" method="post"  novalidate>
              <div class="row">
                  <div class="col-12">
                      <label for="validationCustom02" class="form-label">E-mail Address</label>
                      <input type="text" name="email" class="form-control" id="validationCustom02" Placeholder="123@gamil.com" required>
                      <div class="invalid-feedback">
                          Please enter valid Email !.
                      </div>

                  </div>
                  <div class="col-12">
                      <label for="validationCustom02" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="validationCustom02" Placeholder="***********" required>
                      <div class="invalid-feedback">
                          Incorrect Password !.
                      </div>
                  </div>
                  
                  <div class="d-grid  col-6 mt-3 mx-auto">
    <button class="btn btn-success" type="submit" style="margin-bottom:5%;">Sign In</button>
    
    <a href="adminLogin.php" class="btn btn-warning d-flex justify-content-center align-items-center" style="margin-bottom: 5%; gap: 8px;">
  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left"
       class="svg-inline--fa fa-arrow-left" role="img"
       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
       style="height: 16px; width: 16px;">
    <path fill="currentColor"
          d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H109.2L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
  </svg>
  <span>Back to Home</span>
</a>


</div>
<div class="col-12">
    <p>Don't have an account?  <a href="Sign_up.php" class="text-blue-600 hover:underline font-medium">Sign up</a></p>
</div>
<div class="col-12">
  <b><p>--------------------- or --------------------</p></b>
</div>
<div class="col-12 text-center">
            <div class="mt-2 mb-2">
              <div id="g_id_onload"
                   data-client_id="562778257507-sn4jlvht5gf6c9da7h4qu69av31i4sa3.apps.googleusercontent.com"
                   data-context="signin"
                   data-ux_mode="popup"
                   data-login_uri="https://yourwebsite.com/login-handler.php"
                   data-auto_prompt="false">
              </div>
              <div class="g_id_signin" 
                   data-type="standard" 
                   data-shape="rectangular" 
                   data-theme="outline" 
                   data-size="large">
              </div>
            </div>
          </div>
          </form>
          </div>
        </div>
       </div>
        </div>
        <!-- Footer -->
  
       <?php include '../Components/footer.php'; ?>
       
     <!--<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>-->
     <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <script>
     
    // disabling form submissions if there are invalid fields
(function(){
  'use strict'


  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
 
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
      const mobileMenuButton = document.getElementById("mobile-menu-button");
      const mobileMenu = document.getElementById("mobile-menu");

      mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    });
  </script>
  
</body>
</html>