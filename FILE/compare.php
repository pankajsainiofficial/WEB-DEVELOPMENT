<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/compare.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/jquery.js"></script>
</head>

<body>
    <div id="homepage">
        <?php
            require "header.php";
        ?>
        <!-- ------------------------------------------------------------------------
------------------------------------Main page compare------------------------       
------------------------------------------------------------------------- -->
        <div id="main-compare">
            <div id="sub-compare">
                <div id="address-bar">
                    <h3>Home > Mobiles</h3>
                </div>
                <!-- ----------------------------------------------product-filter---------------------------------- -->
                <div id="product-filter">
                    <div class="filter">
                        <div class="filter-heading">
                            <!-- <i class="fas fa-filter"></i> -->
                            <h2> Filter Result</h2>
                        </div>
                        <div class="search-criteria crt-top">
                            <section class="criteria1">
                                <h2>REFINE RESULT</h2>
                            </section>
                            <section class="entry crt-sub">
                                <input type="text" name="criteria" placeholder="Search for criteria,feature..">
                            </section>
                        </div>
                        <div class="price-range crt-top">
                            <section class="criteria1">
                                <h2>PRICE RANGE</h2>
                            </section>
                            <section class="range-slider crt-sub">

                            </section>
                        </div>
                        <div class="product-brand crt-top">
                            <section class="criteria1">
                                <h2>BRANDS</h2>
                            </section>
                            <section class="brand crt-sub">
                                <input type="text" name="criteria" placeholder="Search for a Brand">
                            </section>
                            <section class="brand-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            APPLE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            MI
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            SAMSUNG
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            VIVO
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            OPPO
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            ONE PLUS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            ASUS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            XI
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            Apple
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            HUWAIE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            SONY
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            ZTE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            NUBIA
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            ITEL
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            TECHNO
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            JIO
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            POCO
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            MOTOROLA
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!------------------------------------------------screen-size-------------------------------------->
                        <div class="mob-type crt-top">
                            <section class="criteria1">
                                <h2>MOBILE TYPE</h2>
                            </section>
                            <section class="mob-type-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            SMARTPHONE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            IOS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            FEATURE PHONE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            DUAL SIM
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            TRIPLE SIM
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            CDMA
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>                        
 <!------------------------------------------------LAUNCHED-------------------------------------->
                        <div class="mob-launched crt-top">
                            <section class="criteria1">
                                <h2>LAUNCHED WITHIN</h2>
                            </section>
                            <section class="mob-launched-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            1 MONTHS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            2 MONTHS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            3 MONTHS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4 MONTHS
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>                        
                        <!-- ------------------------------screen-size-------------------------->
                        <div class="mob-screen crt-top">
                            <section class="criteria1">
                                <h2>SCREEN SIZE</h2>
                            </section>
                            <section class="mob-screen-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4 inch & below
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4 inch - 4.7 inch
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4.7 inch - 5 inch
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5 inch - 5.5 inch
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5.5 - 6.5 inch
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            6.5 inch - above
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <!-- ------------------------------screen-resolution-------------------------->
                        <div class="mob-screen crt-top">
                            <section class="criteria1">
                                <h2>SCREEN RESOLUTION</h2>
                            </section>
                            <section class="mob-resolution-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            HIGH PPI DISPLAY
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            HD
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            FULL HD
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            2K (QHD)
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4K (UHD)
                                        </label>
                                    </li>
                            </section>
                        </div>
                        <!-- ------------------------------screen-features-------------------------->
                        <div class="mob-screen crt-top">
                            <section class="criteria1">
                                <h2>SCREEN FEATURES</h2>
                            </section>
                            <section class="screen-features-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            GORILLA GLASS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            AMOLED
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            IPS LCD
                                        </label>
                                    </li>
                            </section>
                        </div>
                        <!-- -------------------------------camera------------------------------------- -->
                        <div class="mob-main-camera crt-top">
                            <section class="criteria1">
                                <h2>MAIN CAMERA FEATURES</h2>
                            </section>
                            <section class="mob-rear-camera-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            REAR CAMERA
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            DUAL CAMERA
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            TRIPLE CAMERA
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            QUARD CAMERA
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="mob-camera-resolution crt-top">
                            <section class="criteria1">
                                <h2>MAIN CAMERA RESOLUTION</h2>
                            </section>
                            <section class="mob-main-camera-resolution crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5 MP & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            13 MP & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            16 MP & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            20 MP & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            20 MP & ABOVE
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>                          
                    <!-- --------------------------frontcamera-------------------------->
                        <div class="mob-front-camera crt-top">
                            <section class="criteria1">
                                <h2>FRONT CAMERA FEATURES</h2>
                            </section>
                            <section class="mob-rear-camera-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            FRONT FLASH
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            AUTO FOCUS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            DUAL FRONT CAMERA
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="mob-front-camera-res crt-top">
                            <section class="criteria1">
                                <h2>FRONT CAMERA RESOLUTION</h2>
                            </section>
                            <section class="mob-front-camera-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5 MP & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            8 MP & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            12 MP & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            16 MP & ABOVE
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!-- ---------------------------------------------CPU------------------------------------->
                        <div class="mob-cpu crt-top">
                            <section class="criteria1">
                                <h2>OPERATING SYSTEM</h2>
                            </section>
                            <section class="mob-cpu-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             4.0 ICE CREAM SANDWHICH
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4.1 JELLY BEAN
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4.4 KITKAT
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5.0 LOLLIPOP
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            6.0 MARSHMALLOW
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            7.0 NOUGAT
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            8.0 OREO
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            9.0 PIE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            10 Q
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            11 RED VELVET CAKE
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!-- ---------------------------------------------CPU speed------------------------------------->
                        <div class="mob-processor-speed crt-top">
                            <section class="criteria1">
                                <h2>PROCESSOR SPEED</h2>
                            </section>
                            <section class="mob-proc-speed-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             1.2 GHZ & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            1.4 GHZ & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            2 GHZ & ABOVE
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!-- ---------------------------------------------SYSTEM ON CHIP------------------------------------->
                        <div class="mob-processor-speed crt-top">
                            <section class="criteria1">
                                <h2>SYSTEM ON CHIP</h2>
                            </section>
                            <section class="mob-chip-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             SNAPDRAGON
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            MEDIATEK
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            EXYNOS
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            KIRIN
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!-- ---------------------------------------------PROCESSOR CORES------------------------------------->
                        <div class="mob-cpu crt-top">
                            <section class="criteria1">
                                <h2>PROCESSOR CORES</h2>
                            </section>
                            <section class="mob-processor-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             OCTA CORE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             QUARD CORE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            DECA CORE
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!-- ---------------------------------------------MEMORY------------------------------------->
                        <div class="mob-memory crt-top">
                            <section class="criteria1">
                                <h2>INTERNAL MEMORY</h2>
                            </section>
                            <section class="mob-memory-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             4 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            8 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            16 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            32 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            64 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            128 GB & ABOVE
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!-- ---------------------------------------------RAM------------------------------------->
                        <div class="mob-ram crt-top">
                            <section class="criteria1">
                                <h2>RAM</h2>
                            </section>
                            <section class="mob-memory-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             2 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             4 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            8 GB & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            16GB & ABOVE
                                        </label>
                                    </li>
                                </ul>
                            </section>
                        </div>
 <!-- ---------------------------------------------BATTERY CAPACITY------------------------------------->
                        <div class="mob-battery crt-top">
                            <section class="criteria1">
                                <h2>BATTERY CAPACITY</h2>
                            </section>
                            <section class="mob-battery-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             2500 mAh & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            3500 mAh & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4000 mAh & ABOVE 
                                         </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4500 mAh & ABOVE                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5000 mAh & ABOVE
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5500 mAh & ABOVE  
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            6000 mAh & ABOVE   
                                        </label>
                                    </li>
                                </ul>
                            </section>  
                        </div>
 <!-- ---------------------------------------------connectivity------------------------------------->
                        <div class="mob-connectivity crt-top">
                            <section class="criteria1">
                                <h2>CONNECTIVITY</h2>
                            </section>
                            <section class="mob-connectivity-list crt-sub">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                             3G
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            4G
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            5G   
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            NFC    
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            IR BLASTER 
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            WIRELESS CHARGING 
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            WIFI 
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            HDMI 
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            VOLTE 
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            USB-C
                                        </label>
                                    </li>
                                </ul>
                            </section>  
                        </div>                        
                        <!-- ------------------------------------filter-------------------------------------------- -->
                    </div>   
                    <!-- =------------------------------------product-filter--------------------------------- -->
                </div>
                <!----------------------------------------------sub-compare---------------------------------------------->
            </div>
            <!-- ----------------------------------------------Main page compare--------------------------->
        </div>
        <!--------------------------------------------------------homepage----------------------------------->
    </div>
</body>

</html>