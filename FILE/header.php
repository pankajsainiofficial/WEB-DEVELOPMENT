<?php
    include "connection.php"
?>

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
                <a href="signup.php"><h3 id="signupclick">SIGNUP</h3></a>
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
    
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->