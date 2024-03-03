<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">


    <head>

    <body>
        <form action="index.php" method="post">
            <h1>LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?>
                <p>
                <?php } ?>

                <!-- Display success message -->
                <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?>
                <p>
                <?php } ?>

                <i class="fa-solid fa-user" style="color: #74C0FC;"></i>
                <input type="text" name="uname" placeholder="Enter your user name"><br><br>

                <i class="fa-solid fa-lock" style="color: #74C0FC;"></i>
                <input type="password" name="password" placeholder="Enter your password"><br><br>
                <button type="submit">Login</button>
                <a href="signup.php" class="btn btn-link"> Create an account</a>
        </form>
    </body>

</html>