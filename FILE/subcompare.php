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
               <h3>Home > Compare > OnePlus Mobile Phones</h3> 
            </div>
            <div id="subcompare">
                <div class="subcompare-photo">
                    <div class= product-image>
                        <img src="/photos/asus1.jpeg" id="productimg">
                    </div>       
                    <div class="small-image-row">
                        <div class="small-image-col">
                            <img src="/photos/asus1.jpeg" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="/photos/asus2.jpeg" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="/photos/asus1.jpeg" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="/photos/asus4.jpeg" class="smallimg">
                        </div>
                        <div class="small-image-col">
                            <img src="/photos/asus5.jpeg" class="smallimg">
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
                            <h2>Asus ROG Phone 5</h2>
                        </div><hr>
                        <div class="product-variant">
                            <label for="">Variant:</label>
                            <button>8GB+128GB</button>
                            <button>12GB+256GB</button>
                        </div><hr>
                    </div>
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
                                    <button>Go to Amazon</button>
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
                                    <button>Go to Amazon</button>
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
                                    <button>Go to Amazon</button>
                                </td>
                            </tr>
                        </table>
                    </div>    
                </div>
    <!-- -----------------------------------------------subcompare---------------------------->
                </div>
                
<!-- ---------------------------------homepage----------------------------- -->

    </div> 
    <script src="/JS/subcompare.js"></script>   
    </body>
</html>