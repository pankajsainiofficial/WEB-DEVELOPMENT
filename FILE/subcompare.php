<?php
    include "function.php";
    $item_id = $_GET['item_id']??1;
    foreach($product->ProgetData() as $item):
        if($item['mb_srno'] == $item_id):
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
    <link rel="stylesheet" href="/css/subcompare.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div id="homepage">
        <?php
                require "header.php";
            ?>
        <div id="addressbar">
        <!-- $item['mb_brandname']. " " .  -->
            <h3>Home > Compare > <?php echo $item['mb_mobilename'] ?></h3>
        </div>
        <div id="subcompare1">
            <div id="subcompare">
                <div class="subcompare-photo">
                    <div class=product-image>
                        <img src="<?php echo '../Products/mobile/'.$item['mb_image1'].'.jpg'?>" id="productimg">
                    </div>
                    <div class="small-image-row">
                        <div class="small-image-col">
                            <img src="<?php echo '../Products/mobile/'.$item['mb_image1'].'.jpg'?>" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="<?php echo '../Products/mobile/'.$item['mb_image2'].'.jpg'?>" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="<?php echo '../Products/mobile/'.$item['mb_image3'].'.jpg'?>" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="<?php echo '../Products/mobile/'.$item['mb_image4'].'.jpg'?>" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="<?php echo '../Products/mobile/'.$item['mb_image5'].'.jpg'?>" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="<?php echo '../Products/mobile/'.$item['mb_image6'].'.jpg'?>" class="smallimg">
                        </div>
                    </div>
                </div>
                <div class="subcompare-detail">
                    <div class="detail-link">
                        <button>Specification</button>
                        <button>Features</button>
                        <button>Similar</button>
                        <button>News</button>
                        <button>Write a Review</button>
                    </div>
                    <div class="details">
                        <div class="product-heading">
                        <!-- $item['mb_brandname']. " " .  -->
                            <h2><?php echo $item['mb_mobilename'] ?></h2>
                        </div>
                        <hr>
                        <div class="product-variant">
                            <label for="">Variant:</label>
                            <button>8GB+128GB</button>
                            <button>12GB+256GB</button>
                        </div>
                        <hr>
                    </div>
                    <div id="product_specs">
                        <div class="comparison">
                            <table style="width:100%">
                                <tr>
                                    <th>Seller</th>
                                    <th>Price</th>
                                    <th>Offers</th>
                                    <th>Details </th>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/photos/brandslogo/amazon.webp" alt="ok">
                                    </td>
                                    <td>
                                        <i class="fas fa-rupee-sign"></i>
                                        49,999
                                    </td>
                                    <td>10% Dis. on Hdfc credit card</td>

                                    <td>
                                        <button>Go to Amazon</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/photos/brandslogo/flipkart.webp" alt="ok">
                                    </td>
                                    <td>
                                        <i class="fas fa-rupee-sign"></i>
                                        55,000
                                    </td>
                                    <td>10% Dis. on Hdfc credit card</td>
                                    <td>
                                        <button>Go to Flipkart</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/photos/brandslogo/oneplus.webp" alt="ok">
                                    </td>
                                    <td>
                                        <i class="fas fa-rupee-sign"></i>
                                        59,999
                                    </td>
                                    <td>10% Dis. on Hdfc credit card</td>
                                    <td>
                                        <button>Go Official</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/photos/brandslogo/croma.webp" alt="ok">
                                    </td>
                                    <td>
                                        <i class="fas fa-rupee-sign"></i>
                                        47,999
                                    </td>
                                    <td>No offer</td>
                                    <td>
                                        <button>Go to Croma</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr>
                        <div class="keyfeatures">
                            <h3>Products Features</h3>
                            <table>
                                <tbody style="line-height: 20px;">
                                <tr>
                                    <td><b>Ram:</b> <?php echo $item['mb_ramsize'] ?></td>
                                    <td><b>Internal Storage:</b> <?php echo $item['mb_romsize']?></td>
                                    <td><b>Screen Size:</b> <?php echo $item['mb_displaysize']?></td>
                                </tr>
                                <tr>
                                    <td><b>Processor: </b> <?php 
                                            $string = strval($item['mb_prochipset']); echo substr("$string",0,18)." ...";?></td>
                                    <td><b>Processor Speed: </b><?php  $string = strval($item['mb_procpu']) ;
                                           $ar = strtok($string, 'GHz');
                                          echo $ar.'GHz';?></td>
                                    <td><b>Battery Capacity: </b><?php $string = strval($item['mb_batterysize']) ;
                                           $ar = strtok($string, 'mAh');
                                          echo $ar.' mAh';?></td>
                                </tr>
                                <tr>
                                    <td><b>Camera: </b><?php $str = strval($item['mb_rearcamera']);
                                                echo substr("$str",0,10)." ...";?></td>
                                    <td><b>Connectivity: </b><?php
                                                echo $item['mb_cellulartech'];
                                                ?></td>
                                    <td> FHD Display</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -----------------------------------------------detail---------------------------->
            <div class="detail-spec">
                <h2>Detail Specification</h2>
                <table>
                    <tbody>
                    <tr class="headtopic">
                        <td colspan="2">General Info</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Model</td>
                        <td><?php echo $item['mb_mobilename']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Launch Date</td>
                        <td><?php $dateis= $item['mb_releasedate'];
                            echo date_format(new DateTime($dateis), "d/m/Y");
                        ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Device Type</td>
                        <td>Smartphone</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Operating System</td>
                        <td><?php echo $item['mb_os']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Sim Type</td>
                        <td><?php echo $item['mb_simtype']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Design</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Dimensions</td>
                        <td><?php echo $item['mb_dimention'];?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Weight</td>
                        <td><?php echo $item['mb_proweight']." g";?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Thickness</td>
                        <td><?php echo $item['mb_dimention'];?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Display</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Display Size</td>
                        <td><?php echo $item['mb_displaysize']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Display Technology</td>
                        <td style="background: #b25959;">Amoled</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Glass type</td>
                        <td><?php echo $item['mb_glassdisplay']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">PPI</td>
                        <td><?php echo "~ ".$item['mb_ppidisplay']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Features</td>
                        <td><?php echo $item['mb_featuredisplay']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Memory</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">RAM</td>
                        <td><?php echo $item['mb_ramsize']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Storage</td>
                        <td><?php echo $item['mb_romsize']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Storage type</td>
                        <td><?php echo $item['mb_romtype']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">USB OTG</td>
                        <td><?php echo $item['mb_connectusb']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Battery</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Capacity</td>
                        <td><?php echo $item['mb_batterysize']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Charging Type</td>
                        <td><?php echo $item['mb_charging']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Fast Charging Wattage</td>
                        <td>865 Watt</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Battery type</td>
                        <td><?php echo $item['mb_batterytype']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Connectivity</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Gprs</td>
                        <td><?php echo $item['mb_connectgprs']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Edge</td>
                        <td><?php echo $item['mb_connectedge']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">3G Capability</td>
                        <td><?php echo $item['mb_connect3g']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">4G Capability</td>
                        <td><?php echo $item['mb_connect4g']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">5G Capability</td>
                        <td><?php echo $item['mb_connect5g']; ?></td>
                    <tr class="topic">
                        <td class="subtopic">Volte</td>
                        <td><?php echo $item['mb_connectvolte']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">NFC</td>
                        <td style="background: #b25959;">Yes</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Wifi</td>
                        <td><?php echo $item['mb_connectwifi']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Bluetooth</td>
                        <td><?php echo $item['mb_connectbluetooth']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Camera</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Camera Setup</td>
                        <td style="background: #b25959;">Triple Camera</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Rear Camera</td>
                        <td style="white-space: pre-wrap";><?php echo $item['mb_rearcamera']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Front Camera</td>
                        <td><?php echo $item['mb_frontcamera']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Rear Video Recording</td>
                        <td><?php echo $item['mb_cameravideo']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Front Video Recording</td>
                        <td><?php echo $item['mb_frontvideo']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Camera Features</td>
                        <td><?php echo $item['mb_camerafeature']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Flash</td>
                        <td><?php echo $item['mb_cameraflash']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Sensors</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Fingerprint Sensnor</td>
                        <td><?php echo $item['mb_profingerprint']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Fingerprint Sensnor Position</td>
                        <td>on Screen</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Fingerprint Sensnor Type</td>
                        <td>Optical</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Face unlock</td>
                        <td><?php echo $item['mb_faceunlock']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">G.P.S</td>
                        <td><?php echo $item['mb_progpsavail']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Other Sensor</td>
                        <td><?php echo $item['mb_prosensors']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Multimedia</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">FM</td>
                        <td><?php echo $item['mb_fmradio']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Music</td>
                        <td><?php echo $item['mb_musicavail']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Audio Jack</td>
                        <td><?php echo $item['mb_projackhead']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Email</td>
                        <td><?php echo $item['mb_emailavail']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Browser supported</td>
                        <td><?php echo $item['mb_browsupport']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">java supported</td>
                        <td><?php echo $item['mb_javasupported']; ?></td>
                    </tr>
                    <tr class="headtopic">
                        <td colspan="2">Technical</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">OS</td>
                        <td style="background: #b25959;">v11</td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Chipset</td>
                        <td><?php echo $item['mb_prochipset']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">CPU</td>
                        <td><?php echo $item['mb_procpu']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">Core Details</td>
                        <td><?php echo $item['mb_procoredetails']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">GPU</td>
                        <td><?php echo $item['mb_progpu']; ?></td>
                    </tr>
                    <tr class="topic">
                        <td class="subtopic">RAM type</td>
                        <td style="background: #b25959;">LPDDR5</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- ----------------------------reviw----------------------------------------->
            <div id="productreview">
                <div class="reviewform">
                    <form action="" method="post">
                        <h2>Write a Review</h2>
                        <div class="review">
                            <label class="reviewfield">
                                Heading
                                <input type="text" placeholder="Type your title here">
                            </label>
                            <label class="reviewfield" style="display: flex;">
                                Summary
                                <textarea name="summary" id="summary" rows="10">
                                    </textarea>
                            </label>
                        </div>
                        <section class="reviewfield">
                            <label>Rating</label>
                            <div class="star-widget">
                                <input type="radio" name="rate" id="rate-5">
                                <label for="rate-5" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-4">
                                <label for="rate-4" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-3">
                                <label for="rate-3" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-2">
                                <label for="rate-2" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-1">
                                <label for="rate-1" class="fas fa-star"></label>
                            </div>
                        </section>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="overallrating">
                    <section> <h2>Overall Rating</h2></section>
                    <div class="finalrating">
                        <section class="ratings"> <h2>4.5</h2><h3>/5</h3> </section>
                        <section>
                            <div class="star-widget">
                                <input type="radio" name="rate" id="rating-5">
                                <label for="rating-5" class="fas fa-star checked"></label>
                                <input type="radio" name="rate" id="rating-4">
                                <label for="rating-4" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rating-3">
                                <label for="rating-3" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rating-2">
                                <label for="rating-2" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rating-1">
                                <label for="rating-1" class="fas fa-star"></label>
                            </div>
                        </section>
                        <section><h3>454 Reviews</h3></section>
                    </div>
                </div>
                <div class="breakdown">
                    <section> <h2>Rating Breakdown</h2></section>
                    <div class="ratingbreak">
                        <section class="break-rate">
                            <h3>5</h3>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <progress class="ratingbar" value="60" max="100"> </progress>
                        </section>
                        <section class="break-rate">
                            <h3>4</h3>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <progress class="ratingbar" value="50" max="100"> </progress>
                        </section>
                        <section class="break-rate">
                            <h3>3</h3>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <progress class="ratingbar" value="40" max="100"> </progress>
                        </section>
                        <section class="break-rate">
                            <h3>2</h3>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <progress class="ratingbar" value="30" max="100"> </progress>
                        </section>
                        <section class="break-rate">
                            <h3>1</h3>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <progress class="ratingbar" value="20" max="100"> </progress>
                        </section>
                    </div>
                </div>    
            </div>
            <!-- ----------------------------------subcompare1----------------------             -->
        </div>
        <?php
                require "footer.php";
            ?>
        <!-- ---------------------------------homepage----------------------------- -->
    </div>
    <script src="/JS/subcompare.js"></script>
</body>
<?php
        endif;
        endforeach;
?>
</html>