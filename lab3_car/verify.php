<?php 
    require("db_conn.php");

    if(isset($_GET['email']) && isset($_GET['v_code'])){
        $query = "SELECT * FROM user WHERE email = '$_GET[email]' AND verification_code = '$_GET[v_code]'";
        $result = mysqli_query($conn, $query);
        if($result){
            if(mysqli_num_rows($result) == 1){
                $result_fetch = mysqli_fetch_assoc($result);
                if($result_fetch['is_verified'] == 0){
                    $update = "UPDATE user SET is_verified = '1' WHERE email = '$result_fetch[email]'";
                    if(mysqli_query( $conn, $update)) {
                        header("Location: login.php?success=Email verified successfully");
                        exit();
                    }else{
                        header("Location: login.php?error=Email already registered");
                        exit();
                    }
                }else{
                    header("Location: login.php?success=Already registered");
                    exit();
                }
                
            }

        }else{
            header("Location: login.php?error=Unknown error occured. Try again.");
            exit();
        }
    }
?>