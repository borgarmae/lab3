<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="Stylesheet.css">

  <title>SIGN UP</title>
</head>

<body>
  <!-- Sign up form -->
  <form action="signup-check.php" method="post">
    <h1>SIGN UP</h1>
    <!-- Display error message -->
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?>
      <p>
      <?php } ?>

      <!-- Display success message -->
      <?php if (isset($_GET['success'])) { ?>
      <p class="success"><?php echo $_GET['success']; ?>
      <p>
      <?php } ?>

      <!-- First name input field -->
      <i class="fa-solid fa-user" style="color: #74C0FC;"></i>
      <?php if (isset($_GET['first_name'])) { ?>
        <input type='text' id=fname name='first_name' placeholder="First name" value="<?php echo $_GET['first_name']; ?>">
      <?php } else { ?>
        <input type='text' id=fname name='first_name' placeholder="First name">
      <?php } ?>

      <!-- Middle name input field -->
      <?php if (isset($_GET['middle_name'])) { ?>
        <input type='text' id=mname name='middle_name' placeholder="Middle name" value="<?php echo $_GET['middle_name']; ?>">
      <?php } else { ?>
        <input type='text' id=mname name='middle_name' placeholder="Middle name">
      <?php } ?>

      <!-- Last name input field -->
      <?php if (isset($_GET['last_name'])) { ?>
        <input type='text' id=lname name='last_name' placeholder="Last name" value="<?php echo $_GET['last_name']; ?>">
      <?php } else { ?>
        <input type='text' id=lname name='last_name' placeholder="Last name">
      <?php } ?>
      <br><br>

      <!-- Username input field -->
      <i class="fa-solid fa-user" style="color: #74C0FC;"></i>
      <?php if (isset($_GET['uname'])) { ?>
        <input type='text' name='uname' placeholder="Enter username" value="<?php echo $_GET['uname']; ?>">
      <?php } else { ?>
        <input type='text' name='uname' placeholder="Enter username">
      <?php } ?>
      <br><br>

      <!-- Email input field -->
      <i class="fa-solid fa-envelope" style="color: #74C0FC;"></i>
      <?php if (isset($_GET['email'])) { ?>
        <input type='text' name='email' placeholder="Enter email" value="<?php echo $_GET['email']; ?>">
      <?php } else { ?>
        <input type='text' name='email' placeholder="Enter email">
      <?php } ?>
      <br><br>

      <!-- Password input field -->
      <i class="fa-solid fa-lock" style="color: #74C0FC;"></i>
      <?php if (isset($_GET['password'])) { ?>
        <input type='password' name='password' placeholder="Enter password" value="<?php echo $_GET['password']; ?>">
      <?php } else { ?>
        <input type='password' name='password' placeholder="Enter password">
      <?php } ?>
      <br><br>

      <!-- Confirm password input field -->
      <i class="fa-solid fa-lock" style="color: #74C0FC;"></i>
      <?php if (isset($_GET['cpassword'])) { ?>
        <input type='password' name='cpassword' placeholder="Re-enter password" value="<?php echo $_GET['cpassword']; ?>">
      <?php } else { ?>
        <input type='password' name='cpassword' placeholder="Re-enter password">
      <?php } ?>
      <br><br>

      <!-- Submit button -->
      <button type="submit">Sign me up</button>

      <!-- Link to login page -->
      Already have an account?<a href="login.php" class="btn btn-link">Sign in</a>

      

</body>

</html>