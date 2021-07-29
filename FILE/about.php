<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/signup.css">
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/jquery.js"></script>
    <script src="/js/about.js"></script>
    <script src="/js/header.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>THIS is About US page</title>
</head>
<!-- onload="show()" -->
<body>
    <?php
        require "header.php";
    ?>
    <div id="about_container">
        <div class="about_head">
                           
            <div class="about_main">
                <h2>About Us at Price-Pair</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, cumque! Reiciendis nisi, ipsam
                    doloremque ipsa praesentium natus culpa, non nam eos delectus autem possimus dolor in nihil
                    accusantium debitis? </p>
            </div>
        </div>
        <!-- -------------------------WHO WE ARE ---------------------------------- -->
        <div id="our_info">
            <div class="abt_container">
                <div class="info_wrapper">
                    <div class="abt_wrapper">
                        <section>
                            <h2>Who We Are</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur totam vel
                                exercitationem
                                debitis amet doloribus incidunt molestias at aliquid dolorem natus rem soluta, delectus
                                ipsa et.
                                Nisi, esse. Necessitatibus labore fugit aliquam!</p>
                        </section>
                        <hr>
                        <section>
                            <h2>What We Do</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur totam vel
                                exercitationem
                                debitis amet doloribus incidunt molestias at aliquid dolorem natus rem soluta, delectus
                                ipsa et.
                                Nisi, esse. Necessitatibus labore fugit aliquam!</p>
                        </section>
                    </div>
                    <div class="abt_img">
                        <img src="/photos/speaker.webp">
                    </div>
                </div>
            </div>
            <!-- -----------------------------OUR-TEAM--------------------------  -->
            <div id="product_team" class="product-fix">
            <span class="h1-fix">
                    <h1>Meet Our Team</h1>
                </span>
                <div class="team-detail">
                    <div class="main-team-details">
                        <ul>
                            <li>
                                <span>
                                    <img src="/photos/weblogo.png">
                                </span>
                                <section>
                                    <h3>Parish Jain</h3>
                                    <ol>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li>
                                <span>
                                    <img src="/photos/weblogo.png">
                                </span>
                                <section>
                                    <h3>Pankaj Saini</h3>
                                    <ol>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li>
                                <span>
                                    <img src="/photos/weblogo.png">
                                </span>
                                <section>
                                    <h3>Parish Jain</h3>
                                    <ol>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                    </ol>
                                </section>
                            </li>
                            <li>
                                <span>
                                    <img src="/photos/weblogo.png">
                                </span>
                                <section>
                                    <h3>Pankaj Saini</h3>
                                    <ol>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                        <li>
                                            <h5>Role :-</h5> Managing Director
                                        </li>
                                    </ol>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- -----------------------Our-Partners----------------------------- -->
            <div id="partners" class="product-fix">
                <span class="h1-fix">
                    <h1>Our TrustWorthy Partners</h1>
                </span>
                <div class="main-partners">
                    <div id="leftbutton">
                        <button onclick="moveleft()">&lt;</button>
                    </div>
                    <ul>
                        <li id="img1" class="items">
                            <img src="/photos/partners/bmw.jpg">
                        </li>
                        <li id="img2" class="items">
                            <img src="/photos/partners/audi.jpg">
                        </li>
                        <li id="img3" class="items">
                            <img src="/photos/partners/harley.jpg">
                        </li>
                        <li id="img4" class="items">
                            <img src="/photos/partners/jaguar.jpg">
                        </li>
                        <li id="img5" class="items">
                            <img src="/photos/partners/nissan.jpg">
                        </li>
                        <li id="img6" class="items">
                            <img src="/photos/partners/mooi.jpg">
                        </li>
                        <li id="img7" class="items">
                            <img src="/photos/partners/san.jpg">
                        </li>
                        <li id="img8" class="items">
                            <img src="/photos/partners/san.jpg">
                        </li>
                    </ul>
                    <div id="rightbutton">
                        <button onclick="moveright()">&gt;</button>
                    </div>


                </div>
            </div>
        </div><!-- this is our-info's Div ,giving padding to whole page -->
    </div>
    <?php
        require "footer.php";
    ?>







</body>

</html>