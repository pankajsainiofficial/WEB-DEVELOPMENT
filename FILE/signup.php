<?php
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'connection.php';
        $username = $_POST['username'];
        $emailaddress = $_POST['Emailaddress'];
        $password =$_POST['pass'];
        $cpassword = $_POST['confirmpass'];
        $exitssql ="SELECT * FROM `users` WHERE `emailaddress` = '$emailaddress'";
        $result = mysqli_query($conn, $exitssql);
        $num = mysqli_num_rows($result);
        if($num > 0){
            $showError = "Email address Already Exists";
        }
        else {
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sqli= "INSERT INTO `users` (`username`, `emailaddress`, `password`, `admin`) VALUES ('$username', '$emailaddress', '$hash', 'user')";
                $result = mysqli_query($conn, $sqli);
                if($result){
                    $showAlert = true;
                }    
            }
            else {
                $showError = "Passwords do not match";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/signup.css">
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/jquery.js"></script>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>SignUp</title>
</head>

<body>
    <?php
        include "header.php"
    ?>
    <?php
        if($showAlert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
        if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
    ?>
    <div id="signupcontent">
        <div id="registerform">
            <form action="" method="post">
                <div class="registermain">
                    <div class="signuplogo"></div>
                    <div class="signuptitle">Price-Pair SignUp</div>
                    <div class="signup-sub-title">P.P. Brothers</div>
                    <div class="signupfields">
                        <div class="username"><i class="fal fa-envelope"></i><input type="text" name="username" placeholder="Enter username here"></div>
                        <div class="emailadd"><i class="fal fa-envelope"></i><input type="email" name="Emailaddress" placeholder="Enter Your Email address"></div>
                        <div class="password"><i class="fal fa-lock-alt"></i><input type="password" name="pass" placeholder="Type your Password"></div>
                        <div class="password"><i class="fal fa-lock-alt"></i><input type="password" name="confirmpass" placeholder="Confirm your password"></div>
                    </div>
                    <span>
                        <button type="submit">Sign Up Now</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <?php
        require "footer.php";
    ?>
</body>

</html>