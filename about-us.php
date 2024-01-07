<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about-us.css">
</head>
<body>

    <?php
        include('header.php');

        echo $header1;
    ?>

    <!-- <header class="headeri">
        <ul>
            <li><a href="home-page.html">HOME</a></li>
            <li><a href="showroom.html">SHOWROOM</a></li>
            <li><a href="about-us.html">ABOUT US</a></li>
            <li><a href="contactus.html">CONTACT US</a></li>
        </ul>
    </header> -->

    <main>
        <div class="bg-foto">
            <img src="Img/logo-1.png" alt="">
            <!-- <p class="bg-title">About Us</p> -->
        </div>

        <div class="text-line">
            <p class="title">About Us</p>

            <!-- <p id="about-us-p">Aliquip irure ad labore est labore elit aliquip aliqua ex labore.Dolor culpa do cillum cupidatat.</p> -->

            <hr id="hr1">

        </div>

        <div class="h-m">
            <div class="about-us-1">
                <div class="about-img"></div>
    
                <div class="about-text-1">
                    <p id="title-1">Our History</p>
    
                    <p id="text">Since 2000, Grande has been dedicated to transforming the car-buying experience. Founded by Filan Fisteku, our mission was clear: to redefine customer-centric service in the automotive industry.
                        <br>
                        <br>
                        Starting small, we quickly gained recognition for our curated selection of quality pre-owned vehicles. Our commitment to transparency and customer relationships has been the driving force behind our growth.
                        <br>
                        <br>
                        Today, Grande stands as a trusted name, built on integrity, reliability, and personalized service. As we move forward, our dedication to innovation and customer satisfaction remains unwavering.
                        <br>
                        <br>
                        Thank you for being part of our journey.
                    </p>
                
                </div>
            </div>
    
            <div class="about-us-1">
                <div class="about-text-2">
                    <p id="title-1">Our Mission</p>
    
                    <p id="text">At Grande, our mission is to redefine the car-buying experience through transparency, quality, and exceptional service. We prioritize trust and integrity, offering a diverse selection of reliable pre-owned vehicles while ensuring every customer feels valued and confident in their purchase.
                        <br>
                        <br>
                        We're dedicated to building lasting relationships, exceeding expectations, and setting new standards in the industry, all while putting our customers' satisfaction at the forefront of everything we do.
                        <br>
                        <br>
                        Thank you for choosing Grande for your automotive needs. Your trust drives our commitment.
                    </p>
                
                </div>
    
                <div class="about-img"></div>
            </div>
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