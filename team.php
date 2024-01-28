<?php
    include "DatabaseConnection.php";
    include_once "teamRepository.php";
    
    $te = new TeamRepository();
    $team = $te->getAllTeam();
?>
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
            <?php foreach ($team as $teams) { ?>
                <div class="profile">
                    <div ><img src="Img/<?php echo $teams['img'];?>" class="team-img" alt=""></div>

                    <div class="team-txt">
                        <p id="team-title"><?php echo $teams['firstname'];?></p>
                        <p id="team-title"><?php echo $teams['lastname'];?></p>
                        <p id="team-text"><?php echo $teams['pozita'];?></p>
                        <p id="team-text"><?php echo $teams['pershkrimi'];?></p>
                    </div>
                </div>
                <?php } ?>
            
        </div>
       

    </main>
    <?php
        include('footer.php');
    
        echo $footer1;
    ?>
    
</body>
</html>