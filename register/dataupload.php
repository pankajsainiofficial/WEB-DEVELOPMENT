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
                            <table>
                                <caption>Data entry here</caption>
                                <tbody>
                                    <tr><th>features</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>Display</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>Memory & Graphics</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>Battery</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>camera</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>Operating System</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>Connectivity</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>Dimention & Weight</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                    <tr><th>Extras</th><td><input type="text" name="productname" placeholder="enter product name here"></td></tr>
                                </tbody>
                            </table>
                            <button>Upload Data</button>
                        </section>
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