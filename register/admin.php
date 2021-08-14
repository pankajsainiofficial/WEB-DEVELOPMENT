<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: /FILE/login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/registercss/admin.css">
    <link rel="stylesheet" href="/registercss/dashboard.css">
    <link rel="stylesheet" href="/registercss/adminfooter.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="/registerjs/admin.js"></script>
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/jquery.js"></script>
    <title>This Is admin panel</title>
</head>

<body>
    <div id="admincontainer">
        <div class="mainadminmenu">
            <?php   
                include "dashboard.php"
            ?>
            <div id="adminwelcome" class="adminblock">
                <div class="adminwelcome">
                    <span>
                        <img src="/photos/welcome.png" alt="Welcome img">
                    </span>
                    <section>
                        <h3>Welcome Back</h3>
                        <h2>P.P BROTHERS</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus officiis
                            dignissimos nesciunt? Veritatis facilis laborum, modi distinctio odio necessitatibus
                            quae autem. Et veniam recusandae totam? Eum dolorem repellendus expedita non
                            consequuntur pariatur aliquid facere.</p>
                    </section>
                </div>
            </div>
            <!-- ----------------------sidemenu---------------------------->

            <!-- -----------------------------Dynamic-Cotainer-php------------------- -->
            <div class="admincontainer">
                <div class="admininformation">
                    <div class="circlearea">
                        <div class="admincircle">
                            <div class="circlecontainer">
                                <div class="progressbar center">
                                    <div class="half-circle progresscircle1"></div>
                                    <div class="half-circle progresscircle1"></div>
                                    <div class="half-circle-top progress1"></div>
                                    <div id="circlecount1" class="progressbar-circle center">
                                        60
                                    </div>
                                </div>
                            </div>
                            <span>
                                <h2>2021</h2>
                                <p>Contact</p>
                            </span>
                        </div>
                    </div>
                    <div class="circlearea">
                        <div class="admincircle">
                            <div class="circlecontainer">
                                <div class="progressbar center">
                                    <div class="half-circle progresscircle2"></div>
                                    <div class="half-circle progresscircle2"></div>
                                    <div class="half-circle-top progress2"></div>
                                    <div id="circlecount2" class="progressbar-circle center">
                                        70
                                    </div>
                                </div>
                            </div>
                            <span>
                                <h2>405</h2>
                                <p>Deals</p>
                            </span>
                        </div>
                    </div>
                    <div class="circlearea">
                        <div class="admincircle">
                            <div class="circlecontainer">
                                <div class="progressbar center">
                                    <div class="half-circle progresscircle3"></div>
                                    <div class="half-circle progresscircle3"></div>
                                    <div class="half-circle-top progress3"></div>
                                    <div id="circlecount3" class="progressbar-circle center">
                                        50
                                    </div>
                                </div>
                            </div>
                            <span>
                                <h2>603</h2>
                                <p>Compaign</p>
                            </span>
                        </div>
                    </div>
                    <div class="circlearea">
                        <div class="admincircle">
                            <div class="circlecontainer">
                                <div class="progressbar center">
                                    <div class="half-circle progresscircle4"></div>
                                    <div class="half-circle progresscircle4"></div>
                                    <div class="half-circle-top progress4"></div>
                                    <div id="circlecount4" class="progressbar-circle center">
                                        50
                                    </div>
                                </div>
                            </div>
                            <span>
                                <h2>Rs. 600cr.</h2>
                                <p>Worth</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -----------------------------------Activity-post---------------------------------------- -->

            <div id="adminactivity" class="adminblock">
                <div class="activitychart">
                    <h2>Activity</h2>
                    <div class="signboard">
                        <div class="sign">2021</div>
                        <div class="strings"></div>
                        <div class="pin top"></div>
                        <div class="pin left"></div>
                        <div class="pin right"></div>
                    </div>
                    <div class="adminchart">
                        <div class="chart">
                            <ul class="numbers">
                                <li><span>100%</span></li>
                                <li><span>50%</span></li>
                                <li><span>0%</span></li>
                            </ul>
                            <ul class="bars">
                                <li>
                                    <div class="bar" data-percentage="50"></div>
                                    <span>Jan</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="100"></div>
                                    <span>Feb</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="70"></div>
                                    <span>Mar</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="60"></div>
                                    <span>April</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="30"></div>
                                    <span>May</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="90"></div>
                                    <span>June</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="75"></div>
                                    <span>July</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="45"></div>
                                    <span>August</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="60"></div>
                                    <span>Sept</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="65"></div>
                                    <span>Oct</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="55"></div>
                                    <span>Nov</span>
                                </li>
                                <li>
                                    <div class="bar" data-percentage="80"></div>
                                    <span>Dec</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- -----------------------------target----------------------------                 -->
                <div class="target">
                    <div class="admmintarget">
                        <div class="target-heading">
                            <h2>Target</h2>
                        </div>
                        <div class="target-progressbar">
                            <div class="target-baroverflow">
                                <div class="target-bar"></div>
                            </div>
                            <span>50</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------------------------------------------
------------------------------Best-selling-Products------------------------
--------------------------------------------------------------------------- -->
            <div id="bspadmin">
                <div class="bsproducts">
                    <section>
                        <h2>Our Customers</h2>
                        <button>See More</button>
                    </section>
                    <hr>
                    <table width=100%>
                        <thead style="line-height: 50px">
                            <tr>
                                <th>Customers</th>
                                <th>Products</th>
                                <th>state</th>
                                <th>Status</th>
                                <th>Purchared</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 60px">
                            <tr>
                                <td>
                                    <img src="/photos/user.gif" alt="">
                                    Pankaj saini
                                </td>
                                <td>Samsung 9000+ Pro Max</td>
                                <td>Punjab</td>
                                <td><progress class="elementbar" value="50" max="100"></progress></td>
                                <td>ok Report</td>
                                <td>Ok report</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/photos/user.gif" alt="">
                                    Parish Jain
                                </td>
                                <td>Asus Rog gaming phone</td>
                                <td>China</td>
                                <td><progress class="elementbar" value="50" max="100"></progress></td>
                                <td>ok Report</td>
                                <td>Ok report</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/photos/user.gif" alt="">
                                    Pankaj saini
                                </td>
                                <td>Samsung 9000+ Pro Max</td>
                                <td>Punjab</td>
                                <td><progress class="elementbar" value="50" max="100"></progress></td>
                                <td>ok Report</td>
                                <td>Ok report</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/photos/user.gif" alt="">
                                    Parish Jain
                                </td>
                                <td>Asus Rog gaming phone</td>
                                <td>China</td>
                                <td><progress class="elementbar" value="50" max="100"></progress></td>
                                <td>ok Report</td>
                                <td>Ok report</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/photos/user.gif" alt="">
                                    Pankaj saini
                                </td>
                                <td>Samsung 9000+ Pro Max</td>
                                <td>Punjab</td>
                                <td><progress class="elementbar" value="50" max="100"></progress></td>
                                <td>ok Report</td>
                                <td>Ok report</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/photos/user.gif" alt="">
                                    Parish Jain
                                </td>
                                <td>Asus Rog gaming phone</td>
                                <td>China</td>
                                <td><progress class="elementbar" value="50" max="100"></progress> </td>
                                <td>ok Report</td>
                                <td>Ok report</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            <!-- ---------------------------------------------------------------------------
------------------------------social-linkaging------------------------
--------------------------------------------------------------------------- -->
            <div id="social-linkage" class="adminblock">
                <div class="facebook social">
                    <div class="fb-link link">
                        <span class="fb-icon">
                            <i class="fab fa-facebook"></i>
                        </span>
                    </div>
                    <div class="socialcount">
                        <section class="fb friends">
                            <h3>89k</h3>
                            <h4> Friends </h4>
                        </section>
                        <hr>
                        <section class="fb followers">
                            <h3>101k</h3>
                            <h4>Followers</h4>
                        </section>
                    </div>
                </div>
                <div class="Twitter social">
                    <div class="tw-link link">
                        <span class="fb-icon">
                            <i class="fab fa-twitter"></i>
                        </span>
                    </div>
                    <div class="socialcount">
                        <section class="fb friends">
                            <h3>89k</h3>
                            <h4> Friends </h4>
                        </section>
                        <hr>
                        <section class="fb followers">
                            <h3>101k</h3>
                            <h4>Followers</h4>
                        </section>
                    </div>
                </div>
                <div class="Google+ social">
                    <div class="go-link link">
                        <span class="fb-icon">
                            <i class="fab fa-google-plus-g"></i>
                        </span>
                    </div>
                    <div class="socialcount">
                        <section class="fb friends">
                            <h3>89k</h3>
                            <h4> Friends </h4>
                        </section>
                        <hr>
                        <section class="fb followers">
                            <h3>101k</h3>
                            <h4>Followers</h4>
                        </section>
                    </div>
                </div>
                <div class="Linkdin social">
                    <div class="li-link link">
                        <span>
                            <i class="fab fa-linkedin-in"></i>
                        </span>
                    </div>
                    <div class="socialcount">
                        <section class="fb friends">
                            <h3>89k</h3>
                            <h4> Friends </h4>
                        </section>
                        <hr>
                        <section class="fb followers">
                            <h3>101k</h3>
                            <h4>Followers</h4>
                        </section>
                    </div>
                </div>
                <div class="Instagram social">
                    <div class="in-link link">
                        <span class="fb-icon">
                            <i class="fab fa-instagram"></i>
                        </span>
                    </div>
                    <div class="socialcount">
                        <section class="fb friends">
                            <h3>89k</h3>
                            <h4> Friends </h4>
                        </section>
                        <hr>
                        <section class="fb followers">
                            <h3>101k</h3>
                            <h4>Followers</h4>
                        </section>
                    </div>
                </div>
            </div>














            <!-- ----------------------------outer-div-container-padding----------------------------- -->
        </div>
    </div>
    <!-- ---------------------------------------copyright---------------------- -->
    <?php
            include "adminfooter.php"
        ?>
    <!-- </div> -->
</body>

</html>