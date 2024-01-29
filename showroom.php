<?php
    include "DatabaseConnection.php";
    include_once "VeturaRepository.php";
    
    $vtrep = new VeturaRepository();
    $vetura = $vtrep->getAllVetura();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
    <link rel="stylesheet" href="style-showroom.css">
</head>
<body>

    <?php
        include('header.php');

        echo $header1;
    ?>

    <main>
        <div class="bgfoto">
            <p class="bg-logo"><img src="Img/logo-1.png" alt="logo"></p>
        </div>

        <div class="brands">
            <div class="logot">
                <img src="Img/lamborghini-logo.png" alt="Lamborghini" class="logo">
                <img src="Img/2025.png" alt="Ferrari" class="logo">
                <img src="Img/1939.png" alt="RollsRoys" class="logo">
                <img src="Img/porsche-logo.png" alt="Porche" class="logo">
                <img src="Img/2028.png" alt="Bently" class="logo">
                <img src="Img/audi-logo.png" alt="Audi" class="logo">
                <img src="Img/bmw-logo.png" alt="BMW" class="logo">
                <img src="Img/mercedes-benz-logo.png" alt="Merceds-benz" class="logo">
                <img src="Img/volkswagen-logo.png" alt="Wolkswagen" class="logo">
            </div>

            <p class="brands-title"><b>OUR CAR</b></p>
        </div>

         <div class="collection">
            <!--<div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div>

            <div class="car">
                <p class="car-img"><img src="Img/LL.png" alt=""></p>
                <div class="car-title">
                    <p class="logo-foto"><img src="Img/1939.png" alt=""></p>
                    <p>ROLLS ROYCE GHOST</p>
                </div>
                <hr id="hr2">
                <div class="car-text">
                    <p>2023</p>
                    <p>0 KM</p>
                </div>
            </div> -->

            <?php foreach ($vetura as $car) { ?>
                <div class="car">
                    <p class="car-img"><img src="Img/<?php echo $car['Foto'];?>" alt="Car Img"></p>
                    <div class="car-title">
                        <p class="logo-foto"><?php echo $car['Motori'].' '; echo $car['HP'].'hp';?></p>
                        <p><?php echo $car['Emri'];?></p>
                    </div>
                    <hr id="hr2">
                    <div class="car-text">
                        <p><?php echo $car['VitiProdhimit'];?></p>
                        <p><?php echo $car['Cmimi']; echo ' $';?></p>
                        <p><?php echo $car['Km']; echo ' Km';?></p>
                    </div>
                </div>

                <!-- <div class="puna">
                    <img src="<?php //echo $job['Img']; ?>" alt="" style="width: 70px; height: auto;">
                    <h3 class="job-title"><?php //echo $job['JobTitle']; ?></h3>
                    <div class="kryesor">
                        <div class="foto-fulltime">
                            <img src="ora.png" alt="" style="width: 20px; height: auto;">
                            <div class="time"><?php //echo $job['Orari']; ?></div>
                        </div>
                        <div class="foto-lokacion">
                            <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                            <div class="lokacion"><?php //echo $job['Lokacioni']; ?></div>
                        </div>
                    </div>
                    <div class="details"><?php //echo $job['Detajet']; ?></div>
                    <a href="#" class="details-btn" onclick="showJobDetails7()">Learn More</a>
                    <span class="open-positions"><?php //echo $job['PozitaTeHapura']; ?> open positions</span>
                </div> -->
            <?php } ?>
        </div>
    </main>

    <?php
        include('footer.php');
    
        echo $footer1;
    ?>
    
</body>
</html>