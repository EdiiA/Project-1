<?php
    SESSION_START();
    include_once 'team-connect.php';
    include_once 'teamRepository.php';

    $addedBy = isset($_SESSION['name']) ? "Added By: " . $_SESSION['name'] : "Added By: Unknown";

    if (isset($_POST['submitbtn'])) {

        $firstName = $_POST['firstname']; //merret nga formulari
        $lastName = $_POST['lastname'];
        $pozita = $_POST['pozita'];
        $pershkrimi = $_POST['pershkrimi'];
        $image = $_POST['foto'];
        $modifikim = $_POST['modifikoi'];
        
        $team = new Team_connect($firstName,$lastName,$pozita,$pershkrimi,$image,$modifikim);
    
        $teamr = new TeamRepository();
        $teamr->insertTeam($team);
        header("location:AdminDashboard.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="register.css">
    </head>
<body>
    <?php
        include('header.php');

        echo $header1;
    ?>

    <div class="register-title">
        <p>Register</p>
    </div>

    <div class="form-div">
        <form class="register-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div>
                <label for="">First Name:</label>  
                <input class="input-field-1" type="text" name="firstname"" >

                <label for="">Last Name:</label>
                <input class="input-field-2" type="text" name="lastname" >
            </div><br>

            <div>
                <label for="">Pozita:</label>
                <input class="input-field" type="text" name="pozita" >

                <label for="">Pershkrimi:</label>
                <input class="input-field" type="text" name="pershkrimi" >
            </div><br>

            <div>
                <label for="">Foto:</label>
                <input  class="input-field" type="file" name="foto">

                <input type="hidden" name="modifikoi" value="<?php echo htmlspecialchars($addedBy); ?>">
            </div>
            
            <input  type="submit" class="register-submit" name="submitbtn" value="Submit" >


        </form>
    </div>

    <?php
        include('footer.php');
    
        echo $footer1;
    ?>
</body>
</html>