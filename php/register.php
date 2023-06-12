

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="Styleshet" href="style1.css">




</head>
<body>

  <?php require 'partials/_navs.php'?>
<div>
  
<!--</div>

<div>
<form action="/USerinfo.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label><b>Name</b></label>
    <input type="Text" placeholder="Enter Your Full Name" name="Name" required>

    <label><b>Email</b></label>
    <input type="Text" placeholder="Enter Email" name="Email" required>
    <label><b>Mobile Number</b></label>
    <input type="Text" placeholder="Mobile 1" name="Mobile1" required>
    <label><b>Alternate Mobile Number</b></label>
    <input type="Text" placeholder="Mobile 2" name="Mobile2" required>
    <label><b>Address</b></label>
    <input type="Text" placeholder="Enter your Address" name="Add">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    
    <button type="submit" class="registerbtn btn-lg">Register</button>
  </div>
--><h3 class="text-center text-dark py-5">Please fill in this form to create an account.</h3>
  <div class="w-50 m-auto container">
        <form action="Userinfo.php" method="POST">
         
          <div class="form-group container">
            <label><b>Name</b></label>
    <input type="Text" autocomplete="off" name="Name" class="form-control" required>
        </div>
        <div class="form-group container">
            <label><b>Email</b></label>
            <input type="Email" name="Email" autocomplete="off" class="form-control">
        </div>
         <div class="container">
          <label><b>Address</b></label>
          <textarea class="form-control" rows="5" name="Address"></textarea>
        
        </div>
        <div class="form-group container">
            <label><b>Mobile Number</b></label>
            <input type="Number" name="Mobile1" autocomplete="off" class="form-control" required>
        </div>
        <div class="form-group container">
            <label><b>Alternate Mobile Number</b></label>
            <input type="Number" name="Mobile2" autocomplete="off" class="form-control">
        </div>
        <div class="container">
          <label><b>Password</b></label>
          <input type="Password" name="pwd" autocomplete="off" class="form-control">
        
        </div>
        <div class="container">
          <label><b>Appointment Date</b></label>
          <input type="Date" name="Date" autocomplete="off" class="form-control">
        
        </div>
       
        <div class="form-group py-5">
            <button type="Submit" class="btn btn-primary btn-block">Register</button>
        </div>
         </div>
      </form>


</div>
</User>
  <div class="container signin text-center">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</div>

<br><br>

<footer>
  <h6 class="p-3 bg-dark text-white text-center">Thank you for visiting Divine Tattoos, hope to see you soon! </h6>

</footer>
  

</body>
</html>
