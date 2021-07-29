<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: /FILE/login.php");
        exit;
    }
    // echo 'Welcome :-'. $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/registercss/dashboard.css">
    <link rel="stylesheet" href="/registercss/dataupload.css">
    <link rel="stylesheet" href="/registercss/adminfooter.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="/registerjs/admin.js"></script>
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/jquery.js"></script>
    <title>This Is admin panel</title>
</head>

<body>
    <div id="dataupload">
        <div class="mainadminmenu">
            <?php
                include "dashboard.php";    
            ?>
            <!-- ------------------------ Upload- Data-section---------------------------------- -->
            <div class="uploaddata adminblock">
                <div class="mainuploadsection">
                    <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                        <div id="drag_upload_file">
                            <p>Drop files Here (max 3 Files)</p>
                            <p>or</p>
                            <p><input type="button" value="Select File(s)" onclick="file_explorer();"></p>
                            <input type="file" id="selectfile" multiple>
                        </div>
                    </div>
                    <div class="filesuploaded">
                        <span>
                            <img src="" alt="">
                        </span>
                        <span>
                            <img src="" alt="">
                        </span>
                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <!-- ----------------------------------datasection--------------------------- -->
                    <div id="datasection">
                        <section class="dataentryproduct">
                            <div class="admincategory">
                                <select name="search">
                                    <option value="Searchin">Select product</option>
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
                        </section>
                        <div id="datacenter">
                            <div class="dataproducts">
                                <div id="scrolltopbutton" class="datanavbar">
                                    <ul>
                                        <li>
                                            <span class="buttonsoption">Vital Info.</a></span>
                                        </li>

                                        <li><span class="buttonsoption">Affiliate Link</span></li>
                                        <li><span class="buttonsoption">Description</span></li>
                                        <li><span class="buttonsoption">Prices and offers</span></li>
                                        <li><span class="buttonsoption">Power Details</span></li>
                                        <li><span class="buttonsoption">More Details</span></li>
                                    </ul>
                                </div>
                                <!-- ----------------vitalform-------------------  -->
                                <div id="stopscrollform" onscroll="stopscroll()">
                                    <div id="vitalform" class="addproductfix hideunhide">
                                        <ul>
                                            <li>Item name
                                                <input name="modelname" placeholder="enter the product name">
                                            </li>
                                            <li>Brand name
                                                <input list="brandname" name="brandname"
                                                    placeholder="enter the product name">
                                                <datalist id="brandname">
                                                    <option value="Redmi">
                                                    <option value="Samsung">
                                                    <option value="Honor">
                                                    <option value="Iphone">
                                                    <option value="Vivo">
                                                    <option value="Oppo">
                                                </datalist>
                                            </li>
                                            <li>Digital storage capacity
                                                <input name="digistorage" placeholder="enter the product name">
                                            </li>
                                            <li>Memory
                                                <input name="memory" placeholder="enter the product name">
                                            </li>
                                            </li>
                                            <li>Operating System
                                                <select name="operating system">
                                                    <option value="" disabled selected>Android</option>
                                                    <option value="ios 7">Ios7</option>
                                                    <option value="ios 8">Ios7</option>
                                                    <option value="Android 10">Ios7</option>
                                                    <option value="ios7">Ios 9</option>
                                                    <option value="ios7">BlackBerry 10</option>
                                                    <option value="ios7">Emui 10</option>
                                                    <option value="ios7">Ios 3</option>
                                                    <option value="ios7">Android 4.1</option>
                                                    <option value="ios7">Android 4.2</option>
                                                    <option value="ios7">Android 5.0</option>
                                                    <option value="ios7">Android 5.1</option>
                                                    <option value="ios7">Android 6.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                    <option value="ios7">Android 4.0</option>
                                                </select>
                                            <li>Wireless information
                                                <input name="modelname" placeholder="enter the product name">
                                            </li>
                                            <li>Warrenty Discription
                                                <input name="modelname" placeholder="enter the product name">
                                            </li>
                                            <li>Cellular Technology
                                                <input list="cellular" name="modelname"
                                                    placeholder="enter the product name">
                                                <datalist id="cellular">
                                                    <option value="5G">
                                                    <option value="4G">
                                                    <option value="3G">
                                                    <option value="2G">
                                                    <option value="GTA VICE CITY">
                                                </datalist>
                                            </li>
                                            <li>Ram Size
                                                <input name="modelname" placeholder="enter the product name">
                                            </li>
                                            <li>Display Type
                                                <input name="modelname" placeholder="enter the product name">
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- -------------------------------------affiliatelink-------------------------- -->
                                    <div id="affiliatelink" class="hideunhide">
                                        <div class="affiliatebox">
                                            <ul>
                                                <li>Affliate link
                                                    <input name="AffiliateLink" placeholder="Paste Affiliate link here">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- -------------------------------Discription--------------------- -->
                                    <div id="admindiscription" class="hideunhide">
                                        <div class="discriptionbox">
                                            <ul>
                                                <li>Discription
                                                    <textarea name="admindiscription" id="disc" rows="12"></textarea>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ---------------------------product-price-&-sales-------------------------- -->
                                    <div id="adminproductprice" class="hideunhide">
                                        <div class="productprice">
                                            <ul>
                                                <li>amazon price
                                                    <input type="number" name="amaprice" placeholder="price on amazon">
                                                </li>
                                                <li>Flipkart price
                                                    <input type="number" name="flipprice"
                                                        placeholder="price on Flipkart">
                                                </li>
                                                <li>ebay price
                                                    <input type="number" name="ebayprice" placeholder="price on Ebay">
                                                </li>
                                                <li>official price
                                                    <input type="number" name="offiprice"
                                                        placeholder="price on Official website">
                                                </li>
                                                <li>Tata Cliq price
                                                    <input type="number" name="tataprice"
                                                        placeholder="price on Tata Cliq">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ------------------------------Power-Details---------------------------- -->
                                    <div id="adminproductpower" class="hideunhide">
                                        <div class="productspower">
                                            <ul>
                                                <li>Type
                                                    <input list="moredetails" type="text" name="amaprice"
                                                        placeholder="Type of battery">
                                                    <datalist id="moredetails">
                                                        <option value="Removeable battery">
                                                        <option value="Non-Removeable battery">
                                                    </datalist>
                                                </li>
                                                <li>Size
                                                    <input type="text" name="flipprice" placeholder="Size of Battery">
                                                </li>
                                                <li>Charging
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- --------------------------------Extra-Details-------------------------------- -->
                                    <div id="adminproductextra" class="hideunhide">
                                        <div class="extradetails">
                                            <h2>GENERAL</h2>
                                            <ul>
                                                <li>Sim type
                                                    <input list="simtype" type="text" name="amaprice"
                                                        placeholder="Type of sim">
                                                    <datalist id="simtype">
                                                        <option value="Dual Sim - GSM-GSM">
                                                    </datalist>
                                                </li>
                                                <li>Device Type
                                                    <input list="devicetype" ype="text" name="flipprice"
                                                        placeholder="Smartphone or feature phone">
                                                    <datalist id="devicetype">
                                                        <option value="Feature phone">feature phone</option>
                                                        <option value="Smartphone">Smartphone</option>
                                                        <datalist>
                                                </li>
                                                <li>Release Date
                                                    <input type="date" name="flipprice"
                                                        placeholder="Release date of the product">
                                                </li>
                                                <li>Dual Sim
                                                    <input list="dualsim" type="text" name="flipprice"
                                                        placeholder="Release date of the product">
                                                </li>
                                                <datalist id="dualsim">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </datalist>
                                            </ul>
                                            <h2>DESIGN</h2>
                                            <ul>
                                                <li>Dimensions
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Weight(g)
                                                    <input type="number" name="flipprice"
                                                        placeholder="Weight of the product in (g)">
                                                </li>
                                            </ul>
                                            <h2>Display</h2>
                                            <ul>
                                                <li>Type
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Touch
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Size
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Aspect Ratio
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>PPI
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Glass Type
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Features
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Notch
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                            <h2>Memory</h2>
                                            <ul>
                                                <li>Ram
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Storage
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Storage Type
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>card Slot
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                            <h2>Connectivity</h2>
                                            <ul>
                                                <li>Gprs
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>edge
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>3G
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>4G
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>5G
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>VoLTE
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Wifi
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Bluetooth
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>USB
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>USB Feature
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                            <h2>Camera</h2>
                                            <ul>
                                                <li>Rear Camera
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Feature
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Video Recording
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Flash
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Front Camera
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Front Video
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Recording
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>

                                            </ul>
                                            <h2>Techinical</h2>
                                            <ul>
                                                <li>Chipset
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>C.P.U.
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Core Details
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>G.P.U.
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Java
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Browser
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                            <h2>Extra</h2>
                                            <ul>
                                                <li>Fingerprint Sensor
                                                    <input list="fingersensor" type="text" name="flipprice"
                                                        placeholder="Availabity of fingerprint Sensor">
                                                    <datalist id="fingersensor">
                                                        <option value="Rear sensor">Rear sensor</option>
                                                        <option value="under Display">under Display</option>
                                                        <option value="Side Button">Side Button</option>
                                                        <datalist>
                                                </li>
                                                <li>GPS
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Face Unlock
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Sensors
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>3.5mm Headphone Jack
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Extra
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                            <h2>Multimedia</h2>
                                            <ul>
                                                <li>Email
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Music
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Video
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>FM Radio
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Document Reader
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                            <h2>Battery</h2>
                                            <ul>
                                                <li>Type
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Size
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                                <li>Fast Charging
                                                    <input type="text" name="flipprice"
                                                        placeholder="Charging eg : 65w wrap charging">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbutton">
                                <button>Upload Data</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <?php
            include "adminfooter.php";
        ?>
</body>

</html>