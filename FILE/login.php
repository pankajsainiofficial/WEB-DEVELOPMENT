<?php
    $login=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "connection.php";
        $emailid = $_POST['emailid'];
        $password = $_POST['password'];
        // Connecting with database
        $sqli = "SELECT * FROM `users` WHERE `emailaddress` = '$emailid'";
        $result = mysqli_query($conn, $sqli);
        $num = mysqli_num_rows($result);
        if($num==1){
            while($row = mysqli_fetch_assoc($result)){
                if (password_verify($password, $row['password'])){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin']= true;
                    $_SESSION['username']= $row['username'];
                    $_SESSION['emailid']= $emailid;
                    header("location: /register/admin.php");
                }
                else {
                    $showError = "Invalid Credential";
                }
            }
        }
        else {
                $showError = "Invalid Email address";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PricePair-Login</title>
</head>

<body>
    <?php
        require "header.php";
    ?>
      <?php
        // if($showAlert){
        // echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <strong>Success!</strong> Your account is now created and you can login
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //         <span aria-hidden="true">&times;</span>
        //     </button>
        // </div> ';
        // }
        if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
    ?>
    <div class="login-div">
        <div class="loginlogo"></div>
        <div class="logintitle">Price-Pair Login</div>
        <div class="sub-title">P.P. Brothers</div>
        <form action="" method="post">
            <div class="loginfields">
                <div class="username"><i class="fal fa-envelope"></i><input type="username" name="emailid"
                        class="user-input" placeholder="Email Address"></div>
                <div class="password"><i class="fal fa-lock-alt"></i><input type="password" name="password"
                        class="pass-input" placeholder="password"></div>
            </div>
            <button type="submit" class="signin-button">Login</button>
        </form>
        <div class="link"><a href="#">Forgot Password ?</a> or <a href="signup.php">Sign Up</a></div>
    </div>
    <?php
        require "footer.php";
    ?>
</body>

</html>