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


<!-- <?php
    include "connection.php"
?> -->

<div id="header">
            <div class="logo">
                <img src="/photos/weblogo.png" alt="ok">
                <h3>Price Pair</h3>
            </div>
            <div class="searchbar">
                <div class="category">
                    <select name="search">
                        <option value="Searchin">Search In</option>
                        <option value="Mobiles">Mobiles</option>
                        <option value="Laptops">Laptops</option>
                        <option value="Tablets">Tablets</option>
                        <option value="Gadgets">Gadgets</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Computers">Computers</option>
                        <option value="Cameras">Cameras</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Smart-Home">Smart Home</option>
                    </select>
                </div>
                <!-- <div id="searchsubmit"> -->
                <input type="text" class="search" placeholder="Search products">
                <button id="submit" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="login">
                <a href="login.php"><h3 id="loginclick">LOGIN</h3></a>
            </div>
            <div class="signup">
                <a href="#"><h3 id="signupclick">SIGNUP</h3></a>
            </div>
            <div id="notification">
                <i class="far fa-bell"></i>
            </div>
        </div>
    
        <!-- -----------------------------------Navbar----------------------------------- -->
        <div id="navbar">
            <div id="categories">
                <ul class="categories_list nav-fix">
                    <li>Shop By Categories
                    <i class="fas fa-caret-down"></i>
                        <div class="sub-menu">
                            <ul>
                                <li>laptop</li>
                                <li>mobile</li>
                                <li>mobile</li>
                                <li>mobile</li>
                                <li>mobile</li>
                                <li>mobile</li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
            <div id="nav_list" class="nav-fix">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="shop.php">Top Deals</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Faq</a></li>
                </ul>
            </div>
        </div>
        <hr>
<!-- -----------------------------------------SIGN-UP---------------------------------------------- -->
    <div id="signupcontent">
        <div id="registerform">
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
            <section>
                <h2>SignUp / Register With Us</h2>
                <i class="fas fa-times"></i>
            </section>
            <form action="" method="post" target="_blank">
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
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->