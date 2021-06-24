<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is another affiliate website</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <script src="/JS/index.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div id="homepage">
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
                <h3>LOGIN</h3>
            </div>
            <div class="signup">
                <h3>SIGNUP</h3>
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
                    <li>Home</li>
                    <li>About</li>
                    <li>Shop</li>
                    <li>Top Deals</li>
                    <li>Contact Us</li>
                    <li>Faq</li>
                </ul>
            </div>
        </div>
        <hr>
        <!-- -----------------------------Carousel------------------------------------ -->
        <div id="container">
            <div id="Carousel">
                <div class="wrapper">
                    <div class="images item-info-fix">
                        <div class="slider">
                            <img src="/photos/mobile.jpg" alt="This is second Carousel image ">
                        </div>
                        <div class="slider">
                            <img src="/photos/desktop.jpg" alt="This is second Carousel image ">
                        </div>
                        <div class="slider">
                            <img src="/photos/laptop.webp" alt="This is second Carousel image ">
                        </div>
                        <div class="slider">
                            <img src="/photos/speaker.webp" alt="This is second Carousel image ">
                        </div>
                        <div class="slider">
                            <img src="/photos/electronics.png" alt="This is second Carousel image ">
                        </div>
                        <div class="slider">
                            <img src="/photos/camera1.jpg" alt="This is second Carousel image ">
                        </div>
                        <div class="slider">
                            <img src="/photos/appliances1.jpg" alt="This is first Carousel image ">
                        </div>
                        <!-- <div class="item-info item-info-fix">
                            <h1>ipad Pro</h1>
                            <p>Ipad pro max comes with thullu specification <br> and bekar price</p>
                        </div> -->
                    </div>
                    <div class="horizontal">
                        <ul>
                            <li><a href="http://www.google.com"><span class="arrow"></span>Leading Smartphones</a> </li>
                            <li><a href="http://www.google.com"><span class="arrow"></span> Leading Computers</a></li>
                            <li><a href="http://www.google.com"><span class="arrow"></span> Leading Laptops</a></li>
                            <li><a href="http://www.google.com"><span class="arrow"></span> Leading Gadgets</a></li>
                            <li><a href="http://www.google.com"><span class="arrow"></span> Leading Electronics</a></li>
                            <li><a href="http://www.google.com"><span class="arrow"></span> Leading Cameras</a></li>
                            <li><a href="http://www.google.com"><span class="arrow"></span> Leading Appliances</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contain">
                    <div class="compare-section">
                        <h2>Compare Products</h2>
                        <div class="compare-head">
                            <div class="main-compare">
                                <select name="comparing">
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
                            <div class="product-list">
                                <input type="text" name="product_1" id="product_1" placeholder="Type the firs product">
                            </div>
                            <span>
                                <h4>V/S</h4>
                            </span>
                            <div class="product-list">
                                <input type="text" name="product_2" id="product_2"
                                    placeholder="Type the second product">
                            </div>
                            <button type="submit">Compare Now</button>
                        </div>
                    </div>
                </div>


            </div>
            <!-- ---------------------------------top-category----------------------------->
            <div id="top-category-heading">
                <div class="heading">
                    <h2>Top Categories Of This Month</h2>
                </div>
                <div id="top-category">
                    <div class="Smartphone product ">
                        <i class="fas fa-mobile-android-alt iconfix color-fix"></i>
                        <h3 class="color-fix">Smartphone</h3>
                    </div>
                    <div class="Laptops-computer product">
                        <span class="material-icons iconfix color-fix">
                            laptop
                        </span>
                        <h3 class="color-fix">Computer & Laptops</h3>
                    </div>
                    <div class="computer-accessories product">
                        <span class="material-icons iconfix color-fix">
                            headset
                        </span>
                        <h3 class="color-fix">Computer Accessories</h3>

                    </div>
                    <div class="Gadgets product">
                        <span class="material-icons iconfix color-fix">
                            devices_other
                        </span>
                        <h3 class="color-fix">Gadgets</h3>
                    </div>
                    <div class="Cameras product">
                        <span class="material-icons iconfix color-fix">
                            photo_camera
                        </span>
                        <h3 class="color-fix">Cameras</h3>
                    </div>
                    <div class="Smart-TV product">
                        <i class="fas fa-tv iconfix color-fix"></i>
                        <h3 class="color-fix">TV</h 3>
                    </div>
                    <div class="Home-appliances product">
                        <span class="material-icons iconfix color-fix">
                            coffee_maker
                        </span>
                        <h3 class="color-fix">Home Appliances</h3>
                    </div>
                    <div class="Game&Toy product">
                        <span class="material-icons iconfix color-fix">
                            smart_toy
                        </span>
                        <h3 class="color-fix">Game & Toy</h3>
                    </div>
                </div>
            </div>
            <!-- ------------------------arrivals------------------------- -->
            <div id="arrivals">
                <div class="arrivals-new">
                    <div class="mega-discount discount">
                        <h2> Mega Discount</h2>
                        <h4>Smartphone and Tablets   <br>   on<br> Mega Discounts</h4>
                        <!-- <img src="/images/mob1.mp4" alt="lets pray to god"> -->
                        <!-- <div class="shop_now"></div> -->
                          <span class="shopnow">Shop Now</span>  
                    </div>
                    <div class="weekend-sale discount">
                        <h2> Weekend Sale</h2>
                        <h4>Computers and Laptops <br> on <br> Weekend sale</h4>
                        <!-- <img src="/images/laptop.jpg" alt="lets pray to god"> -->
                        <span class="shopnow">Shop Now</span>
                    </div>
                    <div class="new-arrivals discount">
                        <h2> New Arrivals </h2>
                        <h4 class="newh4">New  Launched <br> Accessories & Gadgets </h4>
                        <!-- <img src="/images/gadgets.jpg" alt="lets pray to god"> -->
                         <span class="shopnow">Shop Now</span>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------popular-mobie------------------------------------>
            <div id="popular-mobiles-main">
                <div class="popular-mobiles-sub">
                    <h2>Popular Mobiles Of This Month</h2>
                    <span>See More</span>
                </div>
                <div id="popular-mobiles-content">
                    <ul class="row-content">
                        <li class="p-mob">
                            <div class="mobile-img">
                                <img src="/images/mobile5.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> M-42-5g</a></span>
                                <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>

                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img">
                                <img src="/images/mobile5.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> Mi-11x-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img">
                                <img src="/images/mobile5.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> redmi-note-10s</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img">
                                <img src="/images/mobile5.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">oppo-a74-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img">
                                <img src="/images/mobile5.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">redmi-9power</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img">
                                <img src="/images/mobile5.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> samsung-f12</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
<!-- ---------------------------------------LAPTOPS-SECTION------------------------------------- -->
            <div id="popular-laptop-main">
                <div class="popular-mobiles-sub">
                    <h2>Popular Laptops Of This Month</h2>
                    <span>See More</span>
                </div>
                <div id="popular-mobiles-content">
                    <ul class="row-content">
                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/lenovo.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> M-42-5g</a></span>
                                <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>

                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/lenovo.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> Mi-11x-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/lenovo.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> redmi-note-10s</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/lenovo.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">oppo-a74-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/lenovo.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">redmi-9power</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/lenovo.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> samsung-f12</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
 <!-- --------------------------------popular-electronics------------------------------------------            -->

            <div id="popular-electronic-main">
                <div class="popular-mobiles-sub">
                    <h2>Popular Electronics Of This Month</h2>
                    <span>See More</span>
                </div>
                <div id="popular-electronic-content">
                    <ul class="row-content">
                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/washing.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> M-42-5g</a></span>
                                <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>

                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/washing.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> Mi-11x-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/samsung.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> redmi-note-10s</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/samsung.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">oppo-a74-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/fridge.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">redmi-9power</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/fridge.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> samsung-f12</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>

 <!-- --------------------------------------accessories------------------------------- -->


 <div id="popular-accessories-main">
                <div class="popular-mobiles-sub">
                    <h2>Popular Accessories Of This Month</h2>
                    <span>See More</span>
                </div>
                <div id="popular-accessories-content">
                    <ul class="row-content">
                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/headphone.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> M-42-5g</a></span>
                                <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>

                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/headphone.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> Mi-11x-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/headphone.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> redmi-note-10s</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/headphone.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">oppo-a74-5g</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/headphone.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#">redmi-9power</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>

                        <li class="p-mob">
                            <div class="mobile-img laptop-img">
                                <img src="/images/headphone.jpeg" alt="ok">
                            </div>
                            <div class="electronic-detail">
                                <span class="pro_name">
                                    <a href="#"> samsung-f12</a></span>
                                    <div class="rating">
                                    <span class="price">Rs 560000</span>                                  
                                </div>
                            </div>
                            <div class="button-compare">
                                <div class="view_pro elec-compare">
                                    <p>View More</p>
                                </div>
                                <div class="compare elec-compare">
                                    <p><i class="fas fa-plus"></i>Compare</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>























            
        </div>
        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>