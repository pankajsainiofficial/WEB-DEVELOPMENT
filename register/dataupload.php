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
                                <div class="datanavbar">
                                    <ul>
                                        <li>
                                            <span>Vital Info.</span>
                                        </li>

                                        <li><span>Affiliate Link</span></li>
                                        <li><span>Description</span></li>
                                        <li><span>Prices and offers</span></li>
                                        <li><span>Power Details</span></li>
                                        <li><span>More Details</span></li>
                                    </ul>
                                </div>
                                <!-- ----------------vitalform-------------------  -->
                                <div id="vitalform" class="addproductfix">
                                    <ul>
                                        <li>Item name
                                            <input name="modelname" placeholder="enter the product name">
                                        </li>
                                        <li>Brand name
                                            <input list="brandname" name="modelname"
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
                                            <input name="modelname" placeholder="enter the product name">
                                        </li>
                                        <li>Memory
                                            <input name="modelname" placeholder="enter the product name">
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
                                <div id="affiliatelink">
                                    <div class="affliatebox">
                                        <ul>
                                            <li>Affliate link
                                                <input name="AffiliateLink" placeholder="Paste Affiliate link here">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- -------------------------------Discription--------------------- -->
                                <div id="admindiscription">
                                    <div class="discriptionbox">
                                        <ul>
                                            <li>Discription
                                                   <textarea name="admindiscription" id="disc" rows="12"></textarea>
                                            </li>
                                        </ul>
                                        
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