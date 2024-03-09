<!DOCTYPE html>
<html lang="en">

<head>
<title>SIGNUP</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Custom CSS
  <link rel="stylesheet" type="text/css" href="Stylesheet.css"> -->

  <style>
    body {
      background-image: url(https://w.wallhaven.cc/full/85/wallhaven-8586my.png);
      background-repeat: no-repeat;
      background-size: cover;
      display: grid;
      place-items: center;
      height: 100vh;
      flex-direction: column;
    }

    .custom-form {
      background-color: rgba(247, 192, 252, 0.9);
      border-radius: 10px;
      padding: 20px;
      margin-top: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-pink {
      background-color: #ff69b4;
      border-color: #ff69b4;
    }

    .btn-pink:hover {
      background-color: #ff4f9e;
      border-color: #ff4f9e;
    }

    .error {
      background: #f49999;
      font-size: 15px;
      color: #fa1f1f;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      margin: 20px auto;
    }

    .success {
      background: #befba4;
      font-size: 15px;
      color: #0bff1f;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      margin: 20px auto;
    }

    * {
      font-family: serif;
      box-sizing: padding-box;
    }
  </style>


</head>

<body>
  <!-- Sign up form -->
  <form action="signup-check.php" method="post">

    <div class="container" style="max-width: 500px;">
      <div class="custom-form">
        <h1 class="text-center">SIGN UP</h1>
        <p class="text-center">Please fill in this form to create an account.</p>
        <hr>

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

          <!-- First Name, Middle Name, Last Name input fields -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <?php if (isset($_GET['first_name'])) { ?>
                <input type="text" name="first_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="First Name" value="<?php echo $_GET['first_name']; ?>">
              <?php } else { ?>
                <input type="text" name="first_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="First Name">
              <?php } ?>
            </div>
            <div class="form-group col-md-4">
              <?php if (isset($_GET['middle_name'])) { ?>
                <input type="text" name="middle_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Middle Name" value="<?php echo $_GET['middle_name']; ?>">
              <?php } else { ?>
                <input type="text" name="middle_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Middle Name">
              <?php } ?>
            </div>
            <div class="form-group col-md-4">
              <?php if (isset($_GET['last_name'])) { ?>
                <input type="text" name="last_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Last Name" value="<?php echo $_GET['last_name']; ?>">
              <?php } else { ?>
                <input type="text" name="last_name" pattern="[A-Za-z ]+" title="Only alphabets are allowed" class="form-control" placeholder="Last Name">
              <?php } ?>
            </div>
          </div>

          <!-- Username input field -->
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-user" style="color: #f051a6;"></i>
                </span>
              </div>
              <?php if (isset($_GET['uname'])) { ?>
                <input type="text" name='uname' class="form-control" placeholder="Username" value="<?php echo $_GET['uname']; ?>">
              <?php } else { ?>
                <input type="text" name='uname' class="form-control" placeholder="Username">
              <?php } ?>
            </div>
          </div>


          <!-- Email input field -->
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-envelope" style="color: #f051a6;"></i>
                </span>
              </div>
              <?php if (isset($_GET['email'])) { ?>
                <input type="email" name='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" class="form-control" placeholder="Email" value="<?php echo $_GET['email']; ?>">
              <?php } else { ?>
                <input type="email" name='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" class="form-control" placeholder="Email">
              <?php } ?>
            </div>
          </div>


          <!-- Password input field -->
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-lock" style="color: #f051a6;"></i>
                </span>
              </div>
              <?php if (isset($_GET['password'])) { ?>
                <input type="password" name='password' class="form-control" placeholder="Password" value="<?php echo $_GET['password']; ?>">
              <?php } else { ?>
                <input type="password" name='password' class="form-control" placeholder="Password">
              <?php } ?>
            </div>
          </div>


          <!-- Confirm password input field -->
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-lock" style="color: #f051a6;"></i>
                </span>
              </div>
              <?php if (isset($_GET['cpassword'])) { ?>
                <input type="password" name='cpassword' class="form-control" placeholder="Retype Password" value="<?php echo $_GET['cpassword']; ?>">
              <?php } else { ?>
                <input type="password" name='cpassword' class="form-control" placeholder="Retype Password">
              <?php } ?>
            </div>
          </div>

          <!-- Agree to terms and conditions checkbox -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="termsCheck" required>
            <label class="form-check-label" for="termsCheck">I agree to the Terms & Conditions</label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-pink mt-3 btn-block">Sign up</button>

          <!-- Login Link -->
          <div class="mt-3 text-center">
            Already have an account? <a href="login.php">Sign in</a>
          </div>
      </div>
    </div>
  </form>
</body>
</html>