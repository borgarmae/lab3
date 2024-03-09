<?php
session_start();

// Checking if the user is logged in or not. If he's not, redirect
if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {


?>

    <!DOCTYPE html>
    <html>

    <head>
        < <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            </style>

            <title>HOME</title>

            <head>

            <body>
                <h1>HOME</h1>

                <div style="position: relative; top: 50%; transform: translateY(-50%);">
                    <h1>Welcome, <?php echo $_SESSION['first_name']; ?>!</h1>
                </div>

                <div style="position: relative; top: 50%; transform: translateY(-50%);">
                    <form action="logout.php" method="post">
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>

            <?php
        } else {
            header("Location: index.php");
            exit();
        }
            ?>

            </body>

    </html>