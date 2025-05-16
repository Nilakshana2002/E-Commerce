<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <!--<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">-->
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
      /*
     html, body {
         margin: 0;
         padding: 0;
         width: 100%;
         height: 100%;
         background-image: url(./img/11.jpg);
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         background-attachment: fixed;
         font-family:san-serif;
         
     }

     .full-height {
         min-height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .left-column {
          background-color:#f2f2f2;
         display: flex;
         align-items: center;
         justify-content: center;
         min-height: 300px;
        color:white;
     }

     .form-container {
         padding: 20px;
         background-color: #ffffff;
         border-radius: 10px;
         box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
     }

     @media (max-width: 575.98px) {
         .left-column, .form-container {
             min-height: auto;
             margin-bottom: 20px;
             margin-top:200px;
         }
         
     }
     img{
        height: 578px;
     }
     .container{
         height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         background-color: #f2f2f2;
         padding: 30px; 
         box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
         margin-bottom: 50px;
     }
     
      */
      html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    background: #ec008c;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #fc6767, #ec008c);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #fc6767, #ec008c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    font-family: san-serif;
}

.full-height {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.left-column {
    background-color: #f2f2f2;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 300px;
    color: white;
}

.form-container {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

img {
    height: 578px;
}

.container {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f2f2f2;
    padding: 30px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 50px;
}

/* Media Queries */
@media (max-width: 992px) {
    .left-column,
    .form-container {
        min-height: 300px;
    }
}

@media (max-width: 768px) {
    img {
        height: auto;  
        max-height: 300px; /* Limit max height */
    }

    .container {
        flex-direction: column;  
        height: auto;  
    }

    .left-column,
    .form-container {
        margin-bottom: 20px;  
    }
}

@media (max-width: 576px) {
    .form-container {
        padding: 15px; /* Reduce padding */
    }

    .left-column {
        min-height: auto; /* Remove minimum height */
    }

    .col-md-6 {
        flex: 0 0 100%;  
        max-width: 100%;
    }

    .d-grid {
        width: 100%; /* Make button full width */
    }
}
    </style>
</head>
<body>
  <div class="container">
    <div class="row w-100 gx-0 ">
      <!-- Left column (Beige column) -->
      <div class="col-md-6 col-sm-12 left-column">
        <!--<div class="row">
        <div class="col-12 text-center"><h2>Welcome to Sign Up</h2></div>
        <div class="col-12">
            <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum perferendis placeat quae perspiciatis dolorem laborum sequi aliquam consequatur facilis id?</p>
        </div>
       </div>-->
       <div id="carouselExampleCaptions" class="carousel slide w-100 h-100 mt-5 ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner w-100">
          <div class="carousel-item active">
            <img src="../images/instagram/hero-3.jpg" class="d-block w-100"alt="...">
            <div class="carousel-caption d-none d-md-block">
 
            </div>
          </div>
          <div class="carousel-item">
            <img src="../images/instagram/hero-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
 
            </div>
          </div>
          <div class="carousel-item">
            <img src="../images/instagram/hero-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
 
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>

      <!-- Right column (form) -->
      <div class="col-md-6 col-sm-12 right">
        <div class="form-container" style="border-radius:10px;">
        <a class="icon-link" href="home.php">
  <img src="./img/logo2.png" alt="Logo"aria-hidden="true" style="width: 50px; height: 50px;">
</a>

          <h2 class="text-center mb-4">Create an Account</h2>
          <form action="store.php" class="row g-3 needs-validation" method="post" novalidate>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" name="fName" class="form-control" id="validationCustom01" placeholder="Enter Your Frist Name" required>
              <div class="invalid-feedback">
                Please enter your name!
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" name="lName" class="form-control" id="validationCustom02" placeholder="Enter Your Last Name" required>
              <div class="invalid-feedback">
                Please enter your lastname!
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label">Email Address</label>
              <input type="email" name="mail" class="form-control" id="validationCustom03" placeholder="Enter Your Email Address" required>
              <div class="invalid-feedback"id="exist-email" >
                Please enter your E-mail!
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" id="validationCustom04" required>
              <div class="invalid-feedback">
                Password required!
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Repeat Password</label>
              <input type="password" name="repass" class="form-control" id="validationCustom04" required>
              <div class="invalid-feedback">
                Password required!
              </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
            </div>
            <div class="col-12 text-center">
              <p>Do you have an account <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="login.php">Sign In</a> .</p>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>

<!--<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>-->
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
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
</body>
</html>
