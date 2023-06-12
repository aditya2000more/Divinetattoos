<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style2.css">
<title> CSS Login Screen Tutorial </title>
</head>
<body>
	<?php require 'partials/_navs.php' ?>

  <body>
    <div class="login-modal">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action="partials/_handlelogin.php" method="POST">
          <input type="text" for="Email" placeholder="Enter your Email" id="Email" name="Email" />
          <input type="password" for="pwd" placeholder="Enter the Password" id="pwd" name="pwd" />
          <button>login</button>
          <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </form>
      </div>
    </div>

</body>
</html>








	<?php require 'partials/_footer.php' ?>

</body>
</html>