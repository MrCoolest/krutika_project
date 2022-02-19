<!-- 
//  if($_SERVER['REQUEST_METHOD']=='POST'){
//   $email=$_POST['email'];
 //  $password=$_POST['pass'];
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>SUCCESS</strong> Your Data Has Been Stored Successfully.
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
// } -->

<?php
  if (isset($_POST["submit"])) {
    
  }
  ?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Login & signupForm</title>
  <link rel="stylesheet" href="signup.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="style.css"> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-Q2bFTOhEALkN8hOms2FKTDLy7eugP2zFZ1T8LCvX42Fp3WoNr3bjZSAHeOsHrbV1Fu9/A0EzCinRE7Af1ofPrw=="
    crossorigin="anonymous" />


</head>

<body>
  <?php
   
   if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $mobile=mysqli_real_escape_string($con,$_POST['mobileno']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
   }
  ?>


  <div class="wrapper">
    <div class="title-text">
      <div class="title login">
        Login Form
      </div>
      <div class="title signup">
        Signup Form
      </div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="#" class="login">
          <div class="field">
            <!-- <i class="fas fa-envelope"></i> -->
            <input type="text" placeholder="Email Address" required>

          </div>
          <div class="field">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="pass-link">
            <a href="#">Forgot password?</a>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" namespace="submit" value="Login">
          </div>
          <div class="signup-link">
            Not a member? <a href="">Signup now</a>
          </div>
              <div class="signup-link ">
             <a href="">Login via Google</a>
          </div>
          <div class="signup-link ">
             <a href="">Login via Facebook</a>
          </div>
          <!-- <div class="loginvia">
            <div class="btn btn-success"></div>
             <a href=""></a>
          </div> -->
         
          <!-- <button type="button" class="btn btn-success btn-sm">Login via Google</button>
            
          <button type="button" class="btn btn-success btn-sm">Login via Facebook</button> -->
          <!-- <p><a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>
         </p> -->
            
        </form>
        <!-- signup form -->

        <form action="#" method="POST" class="signup">
          <div class="field">
            <input type="text" placeholder="Full Name"
            name="username" required>
          </div>
          <div class="field">
            <input type="text" placeholder="Email Address" name="email" required>
          </div>
          <div class="field">
            <input type="number" placeholder="Mobile Number" name="mobileno" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Confirm password" name="cpassword" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" name="submit" value="Create An Account">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
      signupBtn.click();
      return false;
    });
  </script>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html