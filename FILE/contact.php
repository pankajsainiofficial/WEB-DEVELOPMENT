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
    <script src="/JS/header.js"></script>
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
        <?php
        if(isset($_POST['submit'])){
            $name=$_REQUEST["fullname"];
            $mno= $_REQUEST["mobile"];
            $email= $_REQUEST["email"];
            $sub= $_REQUEST["subject"];
            $message= $_REQUEST["Desc"];            
            $sql = "INSERT INTO `contact` (`Name`, `mobile`, `email`, `subject`, `message`) VALUES ('$name, '$mno', '$email', '$sub', '$message')";
            $result = mysqli_query ($conn, $sql);
            if($result){
                echo "Record added succesfully";
            }
            else {
                echo "Record not added";
            }
        }
        ?>       
            <div class="map-img">
                </div>
                <div id="mainform">
                    <div class="inputform">
                        <div class="productform formhgt">
                            <h2>Send us a Message</h2>
                            <form action="#" method="post">
                                <section class="contactform">
                            <label>Full Name
                                <span>
                                    <input name= "fullname" type="text" placeholder="Type your full Name...">
                                </span>
                            </label>
                            <label>Mobile No.
                                <span>
                                    <input name="mobile" type="number" placeholder="Your Mobile Number...">
                                </span>
                            </label>
                            <label>Email address
                                <span>
                                    <input name="email" type="email" placeholder="Email address">
                                </span>
                            </label>
                            <label>Subject
                                <span>
                                    <input name="subject" type="text" placeholder="The message subject...">
                                </span>
                            </label>
                            <label>Description
                                <span>
                                    <!-- <input type="text" placeholder="Type here..."> -->
                                    <textarea name="Desc" id="descarea"  rows="12" placeholder="Type your message here"></textarea>
                                </span>
                            </label>
                        </section>
                        <button Type="submit" name="submit">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="contact-address formhgt ">
                    <div class="email cad">
                       <i class="fas fa-envelope-open-text contact-logo">
                           </i>  
                           <h3>Email Address</h3>
                           <h2>pankajsaini19967@gmail.com<br> parishjainofficial@gmail.com</h2>                  
                        </div>
                        <div class="headquartor cad">
                            <i class="fas fa-map-marker-alt contact-logo"></i>
                            <h3>Headquarters</h3> 
                            <h2>Municipal Corporation D-zone,<br> Ludhiana,Punjab</h2>
                        </div>
                        <div class="phoneno cad">
                            <i class="fas fa-phone-alt contact-logo"></i>
                            <h3>Contact No.</h3> 
                            <h2>9988277695<br>9465932244</h2>
                        </div>
                        
                    </div>
                </div>



            
            </div>
        </div>
    </div>
        <?php
            require "footer.php";
        ?>
</body>