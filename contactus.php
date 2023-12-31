<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-contactus.css">
    <title>CONTACT US</title>
</head>
<body>

    <?php
        include('header.php');

        echo $header1;
    ?>

    <!-- <header>
        <ul>
            <li><a href="home-page.html">HOME</a></li>
            <li><a href="showroom.html">SHOWROOM</a></li>
            <li><a href="about-us.html">ABOUT US</a></li>
            <li><a href="contactus.html">CONTACT</a></li>
        </ul>
    </header> -->

    <main>
        <!-- <div class="bgfoto">
            <p>CONTACT US</p>
        </div> -->

        <div class="bg-foto">
            <img src="Img/logo-1.png" alt="">
        </div>

        <div class="text-line">
            <p class="title">Contact Us</p>

            <!-- <p id="about-us-p">Aliquip irure ad labore est labore elit aliquip aliqua ex labore.Dolor culpa do cillum cupidatat.</p> -->

            <hr id="hr1">

        </div>

        <p id="contact-txt">Do not hesitate to contact us anything about your car.</p>

        <div class="mbikontakt">
            <div class="div-1">
                <img src="Img/phone-1.png" alt="phone" class="img">
                <h3>PHONE</h3>
                <p>Phone 049-403-960</p>
                <p>Phone 048-800-450</p>
            </div>
            <div class="div-2">
                <img src="Img/maps icon.png" alt="" class="img">
                <h3>ADRESSE</h3>
                <p>Magj. Prishtine-Ferizaj,</p>
                <p>Çagllavicë, Kosovë.</p>
            </div>
            <div class="div-3">
                <img src="Img/emailicon.png" alt="" class="img">
                <h3>EMAILS</h3>
                <p>ek67709@ubt-uni.net</p>
                <p>ea67877@ubt-uni.net</p>
            </div>
        </div>
        <div class="div-con">
            <form action="" class="forma">
                <h3 id="h3">CONTACT US!</h3>
                <div class="f-in">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                </div>
                <input type="email" placeholder="Enter Your Email" id="email">
                <textarea name="" id="textarea" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                <button>Contact Our Agents Now</button>
            </form>
        </div>
        
    </main>
    
    <?php
        include('footer.php');
    
        echo $footer1;
    ?>

    <!-- <footer>
        <div class="footeri">
            <div class="f-p1">
                <h2>SHOWROOM</h2>
                
                <div>
                    <p>Magj. Prishtine-Ferizaj,</p>
                    <p>Çagllavicë</p>
                    <p>Kosovë</p>
                </div>
            </div>
            <div class="f-p2">
                <h2>Our Links</h2>

                <div>
                    <p><a id="links" href="showroom.html">SHOWROOM</a></p>
                    <p><a id="links" href="about-us.html">ABOUT US</a></p>
                    <p><a id="links" href="contactus.html">CONTACT US</a></p>
                </div>
            </div>
            <div class="f-fotot">
                <h2>Social Media</h2>

                <div class="social-logo">
                    <a href="#"><img src="Img/Instagram.png" alt="" class="img-1"></a>
                    <a href="#"><img src="Img/facebook.png" alt="" class="img-f"></a>
                    <a href="#"><img src="Img/Tiktok.png.webp" alt="" class="img-f"></a>
                </div>
            </div>
        </div>
    </footer> -->
</body>
</html>