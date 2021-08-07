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
    <script src="/JS/header.js"></script>
</head>

<body>
    <div id="homepage">
        <?php
            require "header.php";
        ?>
        <?php
            require "function.php";
            $shuffle_data = $product->ProgetData();
            print_r($shuffle_data);
        ?>
        <div id="address-bar">
            <h3>Home > Mobiles</h3>
        </div>
        <!-- ------------------------------------------------------------------------
------------------------------------Main page compare------------------------       
------------------------------------------------------------------------- -->
        <div id="main-compare">
            <div id="sub-compare">
                <!-- ----------------------------------------------product-filter---------------------------------- -->
                <div id="product-filter">
                    <div class="filter">
                        <div class="filter-heading">
                            <h2> Filter Result</h2>
                        </div><hr>
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
                        <!------------------------------------------------type-------------------------------------->
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
                                            4500 mAh & ABOVE                                        
                                        </label>
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

                

                <!-- -------------------------------------------MOBILE DETAIL-----------------------                -->
                <?php foreach($shuffle_data as $items) { ?>
                <div class="product-detail">
                    <div class="mobile-detail">
                        <div class="filter-head">
                            <h2> Mobile Phones</h2><hr>
                        </div>
                        <div class="sortsection">
                            <h3>Showing: 1-12 Result from 3000 Mobiles</h3>
                            <div class="sortby">
                                <section>
                                    <h3>Sort By:</h3>
                                </secttion>
                                <section class="btn-grad">
                                    <h4>Popularity</h4>
                                </section>
                                <section class="btn-grad">
                                    <h4>Price</h4>
                                </section>
                                <section class="btn-grad">
                                    <h4>Date</h4>
                                </section>
                            </div>    
                        </div>
                    </div>
                    <div class="mob-detail">
                        <div class="mobl">
                            <div class="mobphoto border">
                                <img src="<?php echo $items['mb_image1'] ?>" alt="ok">
                            </div>
                            <div class="mobspec border">
                                <h2><?php echo $items['mb_brandname']. " " . $items['mb_mobilename']?></h2>
                                <div class="mob-info">
                                    <section class="mob-info-sub">
                                        <h3>Memory</h3>
                                        <ul>
                                            <li><?php echo $items['mb_ramsize']. " RAM" ?></li>
                                            <li><?php echo $items['mb_romsize'] . " Inbuit"?> </li>
                                        </ul>
                                    </section>
                                    <section class="mob-info-sub">
                                        <h3>Processor</h3>
                                        <ul>
                                            <li><?php echo $items['mb_prochipset'] ?></li>
                                            <li><?php echo $items['mb_procpu'] ?></li>
                                        </ul>
                                    </section>
                                    <section class="mob-info-sub">
                                        <h3>Display</h3>
                                        <ul>
                                            <li><?php echo $items['mb_displaysize'] ?></li>
                                            <li><?php echo $items['mb_displaypixel'] ?></li>
                                        </ul>
                                    </section>
                                    <section class="mob-info-sub">
                                        <h3>Camera</h3>
                                        <ul>

                                            <li><?php
                                                $str = strval($items['mb_rearcamera']);
                                                $res = preg_replace("/[^0-9MP+\s]/i", "", "$str" );
                                                echo "Rear:- ". $res; 
                                             ?></li>
                                            <li><?php
                                                $str = strval($items['mb_frontcamera']);
                                                $res = preg_replace("/[^0-9MP+\s]/i", "", "$str" );
                                                echo "Front:- ". $res; 
                                             ?></li>
                                        </ul>
                                    </section>
                                    <section class="mob-info-sub">
                                        <h3>Connectivity</h3>
                                        <ul>
                                            <li>
                                                <?php
                                                $connectone = strval($items['mb_connect3g']);
                                                $connecttwo = strval($items['mb_connect4g']);
                                                $connectthree = strval($items['mb_connect5g']);
                                                $connectvolte = strval($items['mb_connectvolte']);
                                                    if(strpos($connectone, 'yes') !== false){
                                                        echo '3G ';
                                                    }else{
                                                        echo "";
                                                    }
                                                    if(strpos($connecttwo, 'yes') !== false){
                                                        echo "4G ";
                                                    }else{
                                                        echo "";
                                                    }
                                                    if(strpos($connectthree, 'yes') !== false){
                                                        echo "5G ";
                                                    }else{
                                                        echo "";
                                                    }
                                                    if(strpos($connectvolte, 'yes') !== false){
                                                        echo "VOLTE ";
                                                    }else{
                                                        echo "";
                                                    }
                                                ?>
                                            </li>
                                            <li>
                                                <?php
                                                $connectwifi = strval($items['mb_connectwifi']);
                                                $connectblue = strval($items['mb_connectbluetooth']);

                                                     if(strpos($connectwifi, 'yes') !== false){
                                                        echo "Wifi ";
                                                    }else{
                                                        echo "";
                                                    }
                                                     if(strpos($connectblue, 'yes') !== false){
                                                        echo "Bluetooth ";
                                                    }else{
                                                        echo "";
                                                    }
                                                ?>
                                            </li>
                                        </ul>
                                    </section>
                                    <section class="mob-info-sub">
                                        <h3>Battery</h3>
                                        <ul>
                                            <li><?php echo strpos(strval($items['mb_batterysize']), 'mAh') !== false ?></li>
                                            <li>Fast Charging</li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                            <div class="mobprice border">
                                <h2> Rs 26,000</h2>
                                <div class="button-compare">
                                    <div class="view_pro elec-compare">
                                        <a href="subcompare.php"> <p>See Prices</p></a>
                                    </div>
                                    <div class="compare elec-compare">
                                        <p>
                                            <i class="fas fa-plus"></i>Compare
                                        </p>
                                    </div>
                                </div>
                            </div> 
                        </div>  
                    </div>

 <!-- -----------------------------------product detail------------------------                -->
                </div>
                <?php } ?>
  <!----------------------------------------------sub-compare---------------------------------------------->
            </div>
  <!-- ----------------------------------------------Main page compare--------------------------->
        </div>
 <!--------------------------------------------------------homepage----------------------------------->
    </div>
</body>

</html>