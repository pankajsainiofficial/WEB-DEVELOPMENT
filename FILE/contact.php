<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Document</title>
</head>

<body>
    <?php
            require "header.php";
        ?>
    <div id="contact-container">
        <div class="contact">
            <h2> Contact </h2>
        </div>
        <div id="contactus">
            <div class="map-img">

            </div>
            <div id="mainform">
                <div class="inputform">
                    <div class="productform formhgt">
                            <h2>Send us a Message</h2>
                        <section class="contactform">
                            <label>Full Name
                                <span>
                                    <input type="text" placeholder="Type your full Name...">
                                </span>
                            </label>
                            <label>Mobile No.
                                <span>
                                    <input type="number" placeholder="Your Mobile Number...">
                                </span>
                            </label>
                            <label>Email address
                                <span>
                                    <input type="email" placeholder="Email address">
                                </span>
                            </label>
                            <label>Subject
                                <span>
                                    <input type="text" placeholder="The message subject...">
                                </span>
                            </label>
                            <label>Description
                                <span>
                                    <!-- <input type="text" placeholder="Type here..."> -->
                                <textarea name="Desc." id="descarea"  rows="12" placeholder="Type your message here"></textarea>
                                </span>
                            </label>
                        </section>
                    </div>
                    <div class="contact-address formhgt ">


                    </div>
                </div>


            </div>
        </div>
    </div>
        <?php
            require "footer.php";
        ?>
</body>