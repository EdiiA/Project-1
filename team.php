<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="team.css">
</head>
<body>
    <?php
        include('header.php');

        echo $header1;
    ?>

    <main>
        <div class="bg-foto">
            <img src="Img/logo-1.png" alt="">
        </div>

        <div class="title_div">
            <p class="title">Team</p>

            <hr id="hr1">

        </div>

        <div class="team">
            <div class="profile">
                <div class="team-img"><img src="" alt=""></div>

                <div class="team-txt">
                    <p id="team-title">Filan Fisteku</p>

                    <p id="team-text">Exercitation ut ipsum nulla laborum consectetur nisi cillum. Aute ipsum ex ipsum consequat. Magna velit Lorem ad laboris nisi non laborum.</p>
                </div>
            </div>

            <div class="profile">
                
                <div class="team-txt">
                    <p id="team-title">Filan Fisteku</p>

                    <p id="team-text">Exercitation ut ipsum nulla laborum consectetur nisi cillum. Aute ipsum ex ipsum consequat. Magna velit Lorem ad laboris nisi non laborum.</p>
                </div>

                <div class="team-img"><img src="" alt=""></div>

            </div>

            <div class="profile">
                <div class="team-img"><img src="" alt=""></div>

                <div class="team-txt">
                    <p id="team-title">Filan Fisteku</p>

                    <p id="team-text">Exercitation ut ipsum nulla laborum consectetur nisi cillum. Aute ipsum ex ipsum consequat. Magna velit Lorem ad laboris nisi non laborum.</p>
                </div>
            </div>
        </div>
    </main>

    <?php
        include('footer.php');
    
        echo $footer1;
    ?>
    
</body>
</html>