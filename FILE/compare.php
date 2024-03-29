<?php
    require "function.php";
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else {
         $page = 1;
    }
    $num_per_page = 11;
    $start_from = ($page-1)*11;
    $table='productmobile';
    $query="SELECT * FROM {$table} WHERE 1";
    if(isset($_GET['Filter'])){
        if(isset($_GET['Brands'])){
            $brand_filter = implode("','",$_GET["Brands"]);
            $query .=" AND mb_brandname IN ('".$brand_filter."')";
        }
        // else{
        //     echo "No Data Found";
        //
        $result = $db->conn->query($query);
        $rows = mysqli_num_rows($result);
        $query .=" limit {$start_from},{$num_per_page}";
        $shuffle_data = $product->ProgetData($query);
    }
    else {
        $result = $db->conn->query($query);
        $rows = mysqli_num_rows($result);
        $query .=" limit {$start_from},{$num_per_page}";
        $shuffle_data = $product->ProgetData($query);
    }
    
    
?>
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
    <script src="/JS/compare.js"></script>
    <script src="/JS/header.js"></script>
</head>

<body>
    <div id="homepage">
        <?php
            require "header.php";
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
                    <form action="" method="GET">
                        <div class="filter">
                            <div class="filter-heading">
                                <h2> Filter Result</h2>
                                <section>
                                    <button type="submit" id='Searchbutton' name='Filter'>Search</button>
                                </section>
                            </div>
                            <hr>
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
                                        <?php
                                            // $sqli = "SELECT DISTINCT mb_brandname FROM `productmobile` ORDER BY mb_brandname ASC";
                                            $sqli = "SELECT srno,mb_brandname FROM `productmobile` GROUP BY(mb_brandname)";
                                            $result = $db->conn->query($sqli);
                                            if(mysqli_num_rows($result)>0){
                                                foreach($result as $pro){
                                                    $checked =[];
                                                    if(isset($_GET['Brands'])){
                                                        $checked = $_GET['Brands'];
                                                    }
                                                    ?>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" class="Brand" name="Brands[]" value="<?=$pro['mb_brandname']?>"
                                                                    <?php if(in_array($pro['mb_brandname'], $checked)){ echo "checked";} ?>
                                                                /> 
                                                                <?=$pro['mb_brandname'];?>
                                                            </label>
                                                        </li>
                                                    <?php
                                                }
                                            }
                                            ?>
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
                                    <?php
                                        $sqli = "SELECT DISTINCT mb_protype FROM `productmobile` ORDER BY mb_protype ASC";
                                        $result = $db->conn->query($sqli);
                                        if(mysqli_num_rows($result)>0){
                                            foreach($result as $pro){
                                                echo '<li>
                                                    <label>
                                                        <input type="checkbox"> '
                                                        .$pro['mb_protype'].
                                                    '</label>
                                                </li>';
                                            }
                                        }
                                        ?>
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
                                                4 inch - 5 inch
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
                                    <ul?>
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
                                    </ul>
                                </section>
                            </div>
                            <!-- ------------------------------screen-features-------------------------->
                            <div class="mob-screen crt-top">
                                <section class="criteria1">
                                    <h2>SCREEN FEATURES</h2>
                                </section>
                                <section class="screen-features-list crt-sub">
                                    <ul>
                                        <?php
                                            $sqli = "SELECT DISTINCT mb_displaytype FROM `productmobile`";
                                            $result = $db->conn->query($sqli);
                                            if(mysqli_num_rows($result)>0){
                                                foreach($result as $pro){
                                                    $pro = explode(' ',$pro['mb_displaytype']);
                                                    echo '
                                                    <li>
                                                        <label>
                                                            <input type="checkbox">'.$pro[0].'
                                                        </label>
                                                    </li>';
                                                }
                                            }
                                        ?>
                                    </ul>
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
                    </form>
                    <!-- =------------------------------------product-filter--------------------------------- -->
                </div>



                <!-- -------------------------------------------MOBILE DETAIL-----------------------                -->
                <div id="products_page">
                    <div class="product-detail">
                        <?php 
                        // $sqli = "SELECT * FROM `productmobile`";
                        { ?>
                        <div class="mobile-detail">
                            <div class="filter-head">
                                <h2> Mobile Phones</h2>
                                <hr>
                            </div>
                            <div class="sortsection">
                                <h3>Showing: <?php echo ($start_from+1).'-'.($start_from+$num_per_page) ?> Result from
                                    <?php echo $rows;?> Mobiles
                                </h3>
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
                        <?php } ?>
                        <?php foreach($shuffle_data as $items) { ?>
                        <div class="mob-detail">
                            <div class="mobl">
                                <div class="mobphoto border">
                                    <span>
                                        <img src="<?php echo '../Products/mobile/'.$items['mb_image1'].'.jpg'; ?>"
                                            alt="ok" style="background-position:center">
                                    </span>
                                </div>
                                <div class="mobspec border">
                                    <!-- $items['mb_brandname']. " " . -->
                                    <h2>
                                        <?php echo $items['mb_mobilename']?>
                                    </h2>
                                    <div class="mob-info">
                                        <section class="mob-info-sub">
                                            <h3>Memory</h3>
                                            <ul>
                                                <li>
                                                    <?php echo $items['mb_ramsize']. " RAM" ?>
                                                </li>
                                                <li>
                                                    <?php echo $items['mb_romsize'] . " Inbuit"?>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="mob-info-sub">
                                            <h3>Processor</h3>
                                            <ul>
                                                <li>
                                                    <?php echo $items['mb_prochipset'] ?>
                                                </li>
                                                <li>
                                                    <?php echo $items['mb_procpu'] ?>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="mob-info-sub">
                                            <h3>Display</h3>
                                            <ul>
                                                <li>
                                                    <?php echo $items['mb_displaysize'] ?>
                                                </li>
                                                <li>
                                                    <?php $arr= explode(",", strval($items['mb_displaypixel'])); echo $arr[0];?>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="mob-info-sub">
                                            <h3>Camera</h3>
                                            <ul>

                                                <li>
                                                    <?php
                                                $str = strval($items['mb_rearcamera']);
                                                $result = preg_replace('/[^0-9MP.]/', ' ', $str); 
                                                echo $result;
                                             ?>
                                                </li>
                                                <li>
                                                    <?php
                                                $str = strval($items['mb_frontcamera']);
                                                $result = preg_replace('/[^0-9MP.]/', ' ', $str); 
                                                echo $result;
                                             ?>
                                                </li>
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
                                                <li>
                                                    <?php
                                            $string = strval($items['mb_batterysize']) ;
                                           $ar = strtok($string, 'mAh');
                                          echo $ar.' mAh ...';
                                            ?>
                                                </li>
                                                <li>
                                                    <?php 
                                            $string = strval($items['mb_charging']); echo substr("$string",0,20)." ...";?>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                                <div class="mobprice border">
                                    <h2> Rs 26,000</h2>
                                    <div class="button-compare">
                                        <div class="view_pro elec-compare">
                                            <a
                                                href="<?php printf('%s?item_id=%s','subcompare.php', $items['srno'])?>">
                                                <p>See More</p>
                                            </a>
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
                        <?php } ?>
                    </div>
                        <!-- -----------------------------------product detail------------------------                -->
                    <div class="bottom-buttons">
                        <?php
                        $total_page = ceil($rows/$num_per_page);
                        if($page>1){
                            echo "<a href='compare.php?page=".($page-1)."' class='btn btn-previous'>Previous</a>";
                        }
                        for($i=1;$i<$total_page;$i++){
                            echo "<a href='compare.php?page=".$i."' class='btn btn-primary'>$i</a>";
                        }
                        if($i>$page){
                            echo "<a href='compare.php?page=".($page+1)."' class='btn btn-next'>Next</a>";
                        }
                        ?>
                    </div>
                </div>
                <!----------------------------------------------sub-compare---------------------------------------------->
            </div>
            <!-- ----------------------------------------------Main page compare--------------------------->
        </div>
        <!--------------------------------------------------------homepage----------------------------------->
    </div>
</body>

</html>