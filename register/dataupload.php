<?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: /FILE/login.php");
        exit;
    }
    // echo 'Welcome :-'. $_SESSION['username'];
    require "../FILE/function.php";
?>
<?php
    if(isset($_POST['submit'])){
        copy($_FILES['jsonFile']['tmp_name'] ,'../jsonFiles/'.$_FILES['jsonFile']['name']);
        $data = file_get_contents('../jsonFiles/'.$_FILES['jsonFile']['name']);
        $products = json_decode($data);
        foreach ($products as $product) {
            // print_r($product);
            $networkdet=$product->network;
            $pieces=explode(",",$networkdet);
            $runsql = "INSERT INTO `productmobile` (`mb_uniqueid`, `mb_image1`, `mb_image2`, `mb_image3`, `mb_image4`,`mb_image5`, `mb_image6`, `mb_mobilename`, `mb_brandname`, `mb_amzrating`, `mb_os`, `mb_wireless`, `mb_warrenty`,`mb_cellulartech`, `mb_ramsize`, `mb_displaytype`, `mb_discription`, `mb_batterytype`,`mb_batterysize`, `mb_charging`, `mb_simtype`, `mb_releasedate`, `mb_dualsim`, `mb_dimention`, `mb_proweight`, `mb_touchdisplay`, `mb_displaysize`, `mb_displaypixel`, `mb_ratiodisplay`, `mb_ppidisplay`, `mb_glassdisplay`, `mb_featuredisplay`, `mb_displaynotch`, `mb_romsize`, `mb_romtype`, `mb_cardslot`, `mb_expandablemem`, `mb_connectgprs`, `mb_connectedge`, `mb_connect3g`, `mb_connect4g`, `mb_connect5g`, `mb_connectvolte`, `mb_connectwifi`, `mb_connectbluetooth`, `mb_connectusb`, `mb_usbfeatureconnect`, `mb_rearcamera`, `mb_camerafeature`, `mb_cameravideo`, `mb_cameraflash`, `mb_frontcamera`, `mb_frontvideo`, `mb_prochipset`, `mb_procpu`, `mb_procoredetails`, `mb_architecture`, `mb_progpu`, `mb_customui`, `mb_colors`, `mb_javasupported`, `mb_browsupport`, `mb_profingerprint`, `mb_progpsavail`, `mb_faceunlock`, `mb_prosensors`, `mb_projackhead`, `mb_spashproof`, `mb_emailavail`, `mb_musicavail`, `mb_videoavail`, `mb_fmradio`, `mb_docreader`, `mb_launchdate`) VALUES ('$product->ID_Ekm', '$product->IMG1', '$product->IMG2', '$product->IMG3', '$product->IMG4', '$product->IMG5', '$product->IMG6', '$product->product_name', '$product->Brand', '$product->AMZ_RATING', '$product->operating_system', 'NULL', 'Null', '$pieces[0]', '$product->RAM', '$product->display_type', 'uyjgajhvajvivi', '$product->battery_type', '$product->battery_capacity', '$product->fast_chraging', '$product->sim', '2021-09-15 18:28:18', 'Null', '$product->dimensions', '$product->weight', '$product->touchscreen', '$product->display', '$product->resolution', '$product->aspect_ratio', '$product->pixel_density', '$product->protection', 'Null', '$product->bezzel_less_display', '$product->STORAGE', 'NULL', 'NULL', '$product->expandable_memory', 'NULL', 'null', 'NULL', 'null', 'null', '$product->voice_over_lte', '$product->wifi', '$product->bluetooth', '$product->usb_otg_support', '$product->USB', '$product->rear_camera', '$product->camera_features', '$product->video_quality', '$product->flash', '$product->front_camera', 'null', '$product->chipset', '$product->cpu', '$product->cores', '$product->architecture', '$product->Graphics', '$product->custom_ui', '$product->colors', '$product->infrared' , 'null', '$product->fingerprint_sensor', '$product->GPS', '$product->face_unlock', '$product->other_sensor', '$product->audio_jack','$product->water_resistant', 'null', '$product->speaker', 'null','null', 'null','$product->launch_date')";
            if($db->conn->query($runsql)==TRUE){
                echo "New Record uploaded successfully";
            } else {
                echo "Error: " . $runsql . "<br>" . $db->conn->error;
                // echo "Some Error";
              }
            
            // $datacount = count($product);
            // $dataspec = count($product[0]->specification);
            // echo $dataspec;
            // for($a=0;$a<$datacount;$a++){
            //     print_r('<br>'.$product[$a]->name);
            //     for ($i=0; $i < $dataspec; $i++) { 
            //         print_r($product[$a]->specification[$i]);
            //     }
            // }
            
        }
    }
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mainuploadsection">
                        <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="dragoverstart(event);"
                            ondragleave="dragleavestart(event);">
                            <div id="drag_upload_file">
                                <p class="paragraphhere">Drag and Drop to upload file</p>
                                <p>or</p>
                                <p><input type="button" value="Select File(s)" onclick="file_explorer(event);"></p>

                                <input id="selectfile" name="images[]" type="file" multiple />
                            </div>
                            <div id="fileheredrop" class="filesuploaded">
                            </div>
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
                                            <li><span class="buttonsoption">Vital Info.</a></span></li>
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
                                                <li>Operating System
                                                    <select name="operatingsystem">
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
                                                </li>
                                                <li>Wireless information
                                                    <input name="wireless" placeholder="enter the product name">
                                                </li>
                                                <li>Warrenty Discription
                                                    <input name="warrenty" placeholder="enter the product name">
                                                </li>
                                                <li>Cellular Technology
                                                    <input list="cellular" name="cellulartech"
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
                                                    <input name="ramsize" placeholder="enter the product name">
                                                </li>
                                                <li>Display Type
                                                    <input name="displaytype" placeholder="enter the product name">
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- -------------------------------------affiliatelink-------------------------- -->
                                        <div id="affiliatelink" class="hideunhide">
                                            <div class="affiliatebox">
                                                <ul>
                                                    <li>Amazon Affliate link
                                                        <input name="amaAffiliateLink"
                                                            placeholder="Paste Affiliate link here">
                                                    </li>
                                                    <li>Flipkart Affliate link
                                                        <input name="flipAffiliateLink"
                                                            placeholder="Paste Affiliate link here">
                                                    </li>
                                                    <li>TataCliq Affliate link
                                                        <input name="tataAffiliateLink"
                                                            placeholder="Paste Affiliate link here">
                                                    </li>
                                                    <li>ebay Affliate link
                                                        <input name="ebayAffiliateLink"
                                                            placeholder="Paste Affiliate link here">
                                                    </li>
                                                    <li>Official Affliate link
                                                        <input name="ebayAffiliateLink"
                                                            placeholder="Paste Affiliate link here">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- -------------------------------Discription--------------------- -->
                                        <div id="admindiscription" class="hideunhide">
                                            <div class="discriptionbox">
                                                <ul>
                                                    <li>Discription
                                                        <textarea name="admindiscription" id="disc"
                                                            rows="12"></textarea>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- ---------------------------product-price-&-sales-------------------------- -->
                                        <div id="adminproductprice" class="hideunhide">
                                            <div class="productprice">
                                                <ul>
                                                    <li>amazon price
                                                        <input type="number" name="amaprice"
                                                            placeholder="price on amazon">
                                                    </li>
                                                    <li>Flipkart price
                                                        <input type="number" name="flipprice"
                                                            placeholder="price on Flipkart">
                                                    </li>
                                                    <li>ebay price
                                                        <input type="number" name="ebayprice"
                                                            placeholder="price on Ebay">
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
                                                        <input list="moredetails" type="text" name="typebattery"
                                                            placeholder="Type of battery">
                                                        <datalist id="moredetails">
                                                            <option value="Removeable battery">
                                                            <option value="Non-Removeable battery">
                                                        </datalist>
                                                    </li>
                                                    <li>Size
                                                        <input type="text" name="sizebattery"
                                                            placeholder="Size of Battery">
                                                    </li>
                                                    <li>Charging
                                                        <input type="text" name="charging"
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
                                                        <input list="simtype" type="text" name="simtype"
                                                            placeholder="Type of sim">
                                                        <datalist id="simtype">
                                                            <option value="Dual Sim - GSM-GSM">
                                                        </datalist>
                                                    </li>
                                                    <li>Device Type
                                                        <input list="devicetype" type="text" name="devicetype"
                                                            placeholder="Smartphone or feature phone">
                                                        <datalist id="devicetype">
                                                            <option value="Feature phone">feature phone</option>
                                                            <option value="Smartphone">Smartphone</option>
                                                            <datalist>
                                                    </li>
                                                    <li>Release Date
                                                        <input type="date" name="releasedate"
                                                            placeholder="Release date of the product">
                                                    </li>
                                                    <li>Dual Sim
                                                        <input list="yesnot" type="text" name="dualsim"
                                                            placeholder="Release date of the product">
                                                    </li>
                                                </ul>
                                                <h2>DESIGN</h2>
                                                <ul>
                                                    <li>Dimensions
                                                        <input type="text" name="dimention"
                                                            placeholder="lenght * breath * height in mm">
                                                    </li>
                                                    <li>Weight(g)
                                                        <input type="number" name="proweight"
                                                            placeholder="Weight of the product in (g)">
                                                    </li>
                                                </ul>
                                                <h2>Display</h2>
                                                <ul>
                                                    <li>Type
                                                        <input type="text" name="displaytype"
                                                            placeholder="Type of the display">
                                                    </li>
                                                    <li>Touch
                                                        <input type="text" name="Touchdisplay"
                                                            placeholder="Touchscreen yes or not">
                                                    </li>
                                                    <li>Size
                                                        <input type="text" name="displaysize"
                                                            placeholder="Size of the Display">
                                                    </li>
                                                    <li>Aspect Ratio
                                                        <input type="text" name="ratiodisplay"
                                                            placeholder="Aspect Ratio of display to product">
                                                    </li>
                                                    <li>PPI
                                                        <input type="text" name="ppidisplay"
                                                            placeholder="pixel per inch of display">
                                                    </li>
                                                    <li>Glass Type
                                                        <input type="text" name="glassdisplay"
                                                            placeholder="Type of the display glass">
                                                    </li>
                                                    <li>Features
                                                        <input type="text" name="featuredisplay"
                                                            placeholder="Explained Feature of Display">
                                                    </li>
                                                    <li>Notch
                                                        <input type="text" name="displaynotch"
                                                            placeholder="Notch type with prefix (yes/no)">
                                                    </li>
                                                </ul>
                                                <h2>Memory</h2>
                                                <ul>
                                                    <li>Ram
                                                        <input type="text" name="ramsize"
                                                            placeholder="Enter the size of the ram">
                                                    </li>
                                                    <li>Storage
                                                        <input type="text" name="romsize"
                                                            placeholder="Rom size / storage">
                                                    </li>
                                                    <li>Storage Type
                                                        <input type="text" name="romtype"
                                                            placeholder="Storage type/ Rom type">
                                                    </li>
                                                    <li>card Slot
                                                        <input list="cardslot" type="text" name="cardslot"
                                                            placeholder="dedicated or hybrid">
                                                    </li>
                                                    <datalist id="cardslot">
                                                        <option value="Dedicated">Dedicated</option>
                                                        <option value="Hybrid">Hybrid</option>
                                                    </datalist>
                                                </ul>
                                                <h2>Connectivity</h2>
                                                <ul>
                                                    <li>Gprs
                                                        <input list="yesnot" type="text" name="connectgprs"
                                                            placeholder=" Gprs available or not">
                                                    </li>
                                                    <li>edge
                                                        <input type="text" list="yesnot" name="connectedge"
                                                            placeholder="edge available or not">
                                                    </li>
                                                    <li>3G
                                                        <input type="text" list="yesnot" name="connect3g"
                                                            placeholder="3g available or not">
                                                    </li>
                                                    <li>4G
                                                        <input type="text" list="yesnot" name="connect4g"
                                                            placeholder="4g available or not">
                                                    </li>
                                                    <li>5G
                                                        <input type="text" list="yesnot" name="connect5g"
                                                            placeholder="5g available or not">
                                                    </li>
                                                    <li>VoLTE
                                                        <input type="text" list="yesnot" name="connectvolte"
                                                            placeholder="Volte type followed by yes">
                                                    </li>
                                                    <li>Wifi
                                                        <input type="text" name="connectwifi"
                                                            placeholder="type wifi information here">
                                                    </li>
                                                    <li>Bluetooth
                                                        <input type="text" name="connectbluetooth"
                                                            placeholder="bluetooth information followed by if yes">
                                                    </li>
                                                    <li>USB
                                                        <input type="text" name="connectusb"
                                                            placeholder="usb information here">
                                                    </li>
                                                    <li>USB Feature
                                                        <input type="text" name="usbfeatureconnect"
                                                            placeholder="usb features">
                                                    </li>
                                                </ul>
                                                <h2>Camera</h2>
                                                <ul>
                                                    <li>Rear Camera
                                                        <input type="text" name="rearcamera"
                                                            placeholder="Rear camera information">
                                                    </li>
                                                    <li>Feature
                                                        <input type="text" name="camerafeature"
                                                            placeholder="Feature of the camera">
                                                    </li>
                                                    <li>Video Recording
                                                        <input type="text" name="cameravideo"
                                                            placeholder="video recording @ eg :720p etc">
                                                    </li>
                                                    <li>Flash
                                                        <input type="text" list="yesnot" name="cameraflash"
                                                            placeholder="Yes or no followed by Led/xenon">
                                                    </li>
                                                    <li>Front Camera
                                                        <input type="text" name="frontcamera"
                                                            placeholder="Font camera information">
                                                    </li>
                                                    <li>Front Video Recording
                                                        <input type="text" name="frontvideo"
                                                            placeholder="Front video recording @ ">
                                                    </li>
                                                </ul>
                                                <h2>Techinical</h2>
                                                <ul>
                                                    <li>Chipset
                                                        <input type="text" name="prochipset"
                                                            placeholder="processor chipset information ">
                                                    </li>
                                                    <li>C.P.U.
                                                        <input type="text" name="procpu"
                                                            placeholder="Clockspeed of the cpu and no of cores">
                                                    </li>
                                                    <li>Core Details
                                                        <input type="text" name="procoredetails"
                                                            placeholder="Cores detailed information">
                                                    </li>
                                                    <li>G.P.U.
                                                        <input type="text" name="progpu"
                                                            placeholder="product graphics card infromation">
                                                    </li>
                                                    <li>Java
                                                        <input type="text" list="yesnot" name="javasupported"
                                                            placeholder="in yes or not">
                                                    </li>
                                                    <li>Browser
                                                        <input type="text" list="yesnot" name="browsupport"
                                                            placeholder="browser available or not">
                                                    </li>
                                                </ul>
                                                <h2>Extra</h2>
                                                <ul>
                                                    <li>Fingerprint Sensor
                                                        <input list="fingersensor" type="text" name="profingerprint"
                                                            placeholder="Availabity of fingerprint Sensor">
                                                        <datalist id="fingersensor">
                                                            <option value="Rear sensor">Rear sensor</option>
                                                            <option value="under Display">under Display</option>
                                                            <option value="Side Button">Side Button</option>
                                                            <datalist>
                                                    </li>
                                                    <li>GPS
                                                        <input type="text" list="yesnot" name="progpsavail"
                                                            placeholder="Gps availability in yes or not">
                                                    </li>
                                                    <li>Face Unlock
                                                        <input type="text" list="yesnot" name="faceunlock"
                                                            placeholder="face unlock available or not">
                                                    </li>
                                                    <li>Sensors
                                                        <input type="text" name="prosensors"
                                                            placeholder="all sensors of product">
                                                    </li>
                                                    <li>3.5mm Headphone Jack
                                                        <input type="text" list="yesnot" name="projackhead"
                                                            placeholder="headphone jack availabilty">
                                                    </li>
                                                    <li>Splash Resistant
                                                        <input type="text" list="yesnot" name="splashresist"
                                                            placeholder="Splash resistant or not">
                                                    </li>
                                                </ul>
                                                <h2>Multimedia</h2>
                                                <ul>
                                                    <li>Email
                                                        <input type="text" list="yesnot" name="emailavail"
                                                            placeholder="availabilty of email (yes or not)">
                                                    </li>
                                                    <li>Music
                                                        <input type="text" list="yesnot" name="musicavail"
                                                            placeholder="availabilty of music (yes or not)">
                                                    </li>
                                                    <li>Video
                                                        <input type="text" list="yesnot" name="videoavail"
                                                            placeholder="availabilty of email (yes or not)">
                                                    </li>
                                                    <li>FM Radio
                                                        <input type="text" list="yesnot" name="fmradio"
                                                            placeholder="availabilty of Fm Radio (yes or not)">
                                                    </li>
                                                    <li>Document Reader
                                                        <input type="text" list="yesnot" name="docreader"
                                                            placeholder="availabilty of doc reader (yes or not)">
                                                    </li>
                                                </ul>
                                                <datalist id="yesnot">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbutton">
                                    <button type="submit" name="submit">Upload Data</button>
                                    <section>
                                        <label for="JsonFileUpload">Upload Json File</label>
                                        <input class='file-upload-button' type="file" 
                                        id="JsonFileUpload" name="jsonFile"/>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <?php
        include "adminfooter.php";
    ?>
</body>

</html>