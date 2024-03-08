<!DOCTYPE html>
<html>

<head>
    <!-- Page title -->
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


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
            align-items: center;
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
            color: #fa1f1f;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        .success {
            background: #befba4;
            color: #0bff1f;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        * {
            font-family: serif;
            box-sizing: padding-box;
        }

        .form-control {
            margin: 5px;
        }
    </style>

    <head>
        <title>SIGN UP</title>
    </head>

<body>
    <form action="index.php" method="post">

        <div class="container mt-4" style="max-width: 500px;">
            <div class="custom-form">
                <h1 class="text-center">LOGIN</h1>
                <p class="text-center">Please enter your credentials.</p>
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

                    <!-- Username input field -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-user" style="color: #f051a6;"></i>
                                </span>
                            </div>
                            <input type="text" name="uname" class="form-control" placeholder="Username">
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
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>
                    </div><br>

                    <!-- Login button -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-pink btn-block">Sign in</button>
                    </div>


                    <!-- Login Link -->
                    <div class="mt-3 text-center">
                        <a href="signup.php">Create an account</a>
                    </div>

            </div>

    </form>
</body>

</html>