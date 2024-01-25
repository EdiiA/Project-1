

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autosallon</title>
    <link rel="stylesheet" href="home-page.css">
</head>
<body>
    <!-- Headeri i Web Faqes -->

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
    
    <!-- Trupi i Web Faqes -->
    <main>
        <!-- Cover Image -->
        <div class="bgfoto">
            <p class="bg-logo"><img src="Img/logo-1.png" alt="logo"></p>
            <!-- <p>Emri</p> House Of Cars -->
        </div>

        <?php
            session_start();
            if (isset($_SESSION['roli'])) {
                if($_SESSION['roli']=="admin"){
                    echo"<button>
                            <a href='AdminDashboard.php'>Dashboard</a>
                        </button>";
                }

                echo"<button>
                        <a href='logout.php'>Log Out</a>
                    </button>";
            }
        ?>

        

        <!-- Brands -->
        <div class="brands">
            <p class="brands-title"><b>OUR CAR BRANDS</b></p>

            <!-- <hr class="line"> -->

            <p class="brands-text">We export Lamborghini, Mercedes, Bmw, Audi, Volkswagen and all other major brand vehicles</p>
            
            <div class="logot">
                <img src="Img/lamborghini-logo.png" alt="Lamborghini" class="logo">
                <img src="Img/2025.png" alt="Ferrari" class="logo">
                <img src="Img/1939.png" alt="RollsRoys" class="logo">
                <img src="Img/porsche-logo.png" alt="Porche" class="logo">
                <img src="Img/2028.png" alt="Bently" class="logo">
                <img src="Img/audi-logo.png" alt="Audi" class="logo">
                <img src="Img/bmw-logo.png" alt="BMW" class="logo">
                <img src="Img/mercedes-benz-logo.png" alt="Merceds-benz" class="logo">
                <img src="Img/Land_Rover_logo.png" alt="Landrover" class="logo">
                <img src="Img/volkswagen-logo.png" alt="Wolkswagen" class="logo">
            </div>
        </div>

        <div class="slider-main">
            <div class="slider-1">
                <p class="slider-title"><b>OUR SHOWROOM</b></p>

                <!-- <hr class="line"> -->

                <p class="slider-text">"The fact is I don't drive just to get from A to B. I enjoy feeling the car's reactions, becoming part of it." - Enzo Ferrari</p>
            
            </div>
            
            <div class="slider-2">    
                <div class="slider-container">
                    <div class="slides">
                        <div class="slide"><img src="Cars-img/ferrari.jpg" alt="Image 1"></div>
                        <div class="slide"><img src="Cars-img/urus.jpg" alt="Image 2"></div>
                        <div class="slide"><img src="Cars-img/svj.jpg" alt="Image 3"></div>
                    </div>
                
                    <div class="prev">&#10094;</div>
                    <div class="next">&#10095;</div>
                </div>  
            </div>
        </div>

        <div class="about-us">
            <div class="about-us-div">
                <p class="about-us-title">ABOUT US</p>

                <p>
                    At Grande, we understand that buying a car is more than just a transaction; it's an experience. With a legacy of 24 years in the automotive industry, we've cultivated expertise and a deep-rooted passion for cars that extends beyond the showroom floor.
                    <br>
                    <br>
                    Our commitment goes beyond just selling cars; it's about providing you with a seamless journey towards finding your perfect vehicle. Whether you're seeking a reliable family car, a high-performance sports vehicle, or a luxury automobile, we pride ourselves on curating a diverse inventory of handpicked cars, ensuring quality, performance, and value.
                    <br>
                    <br>
                    What sets us apart is our dedication to customer satisfaction. Our knowledgeable and friendly team is here to assist you every step of the way, offering expert guidance, answering your questions, and tailoring solutions that align with your preferences and budget.
                </p>
            </div>
        </div>

        <div class="client">
            <!-- <div class="client-bg"></div> -->

            <div class="client-bg-2">
                <video id="background-video" src="Img/【The Porsche 992——A dream car of a man？？？】.mp4" autoplay loop playsinline muted></video>
            </div>

            <div class="client-parent">
                <div class="client-child">
                    <p>"Exceptional service from start to finish! The team at Grande went above and beyond, ensuring a smooth and satisfying car buying experience. Highly recommend!"</p>
                    <p>Filan Fisteku</p>
                </div>
                <div class="client-child">
                    <p>
                        "From seamless transactions to a personalized approach, this car selling company turned my vehicle purchase into an effortless and enjoyable experience, exceeding all expectations."</p>
                    <p>Filan Fisteku</p>
                </div>
                <div class="client-child">
                    <p>"Exceptional service, seamless transaction, and a trustworthy team - buying my dream car from Grande was an absolute pleasure!"</p>
                    <p>Filan Fisteku</p>
                </div>
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

    <script>
        let currentIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;

        document.querySelector('.next').addEventListener('click', () => {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlider();
        });

        document.querySelector('.prev').addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalSlides - 1;
            }
            updateSlider();
        });

        function updateSlider() {
            const translateValue = -currentIndex * 100 + '%';
            slides.style.transform = `translateX(${translateValue})`;
        }
    </script>
</body>
</html>