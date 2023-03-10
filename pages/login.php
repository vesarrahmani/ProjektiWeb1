<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/forms.css?v=<?php echo time();?>">
  <link rel="icon" href="../img/logo.png" type="image/png">
  <title>Login</title>
</head>

<body>
   
<!-- header section starts  -->
    <?php include '../include/header.php'; ?>
  <!-- End Header -->

<div class="heading" style="background:url(../img/header-bg-3.png) no-repeat">
  <h1>Log in</h1>
</div>
<!-- login section starts  -->

<section class="form">

  <h1 class="heading-title">Login now!</h1>

  <form method="post" action="../loginRegister/loginValidation.php"  class="form-form">

     <div class="flex">
  
        <div class="inputBox">
           <span>Username :</span>
           <input type="text" placeholder="enter your username" id="username" name="username" required>
        </div>
        <br></br>
        <div class="inputBox">
           <span>Password :</span>
           <input type="password" placeholder="enter your password" id="password" name="password" required>
        </div>
     </div>

     <input type="submit" value="login" class="btn" name="login">
     <!-- onclick=" validimiLogin()"-->
     <p class="message">Not registered? <a href="register.php">Create an account</a></p> 

  </form>

</section>

<!-- login section ends -->


<!-- footer section starts  -->

<?php include '../include/footer.php'; ?>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="../javascript/app.js"></script>

</body>
</html>

