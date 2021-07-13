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
                $sqli= "INSERT INTO `users` (`username`, `emailaddress`, `password`) VALUES ('$username', '$emailaddress', '$hash')";
                $result = mysqli_query($conn, $sqli);
                if($result){
                    $showAlert = true;
                }
                else {
                    $showError = "Passwords do not match";
                }
                
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/signup.css">
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
            <h2>SignUp / Register With Us</h2>
            
            <form action="" method="post">
                <div class="registermain">
                    <span>
                        <img src="/photos/weblogo.png" alt="Price pare logo" height=100 width=100>
                    </span>
                    <section>
                        <label>Username
                            <input type="text" name="username" placeholder="Enter username here">
                        </label>
                        <label>Email Address
                            <input type="email" name="Emailaddress" placeholder="Enter Your Email address">
                        </label>
                        <Label>Password
                            <input type="password" name="pass" placeholder="Type your Password">
                        </Label>
                        <label>Confirm Password
                            <input type="password" name="confirmpass" placeholder="Confirm your password">
                        </label>
                    </section>
                    <span>
                        <button type="submit">Sign Up Now</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>