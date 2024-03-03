<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name'])){


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "Stylesheet.css">
    
    <title>HOME</title>
<head>

<body>
    <h1>HOME</h1>
    Welcome, <?php echo $_SESSION['first_name']; ?>!
    <a href="logout.php" class="btn btn-dark" role="button">Logout</a>

</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>