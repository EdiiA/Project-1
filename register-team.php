<?php
    include_once 'team-connect.php';
    include_once 'teamRepository.php';

    if (isset($_POST['submitbtn'])) {
<<<<<<< Updated upstream

        $firstName = $_POST['firstname']; //merret nga formulari
        $lastName = $_POST['lastname'];
        $pozita = $_POST['pozita'];
        $pershkrimi = $_POST['pershkrimi'];
        $image = $_POST['foto'];
        
        $team = new Team_connect($firstName,$lastName,$pozita,$pershkrimi,$image);
    
        $teamr = new TeamRepository();
        $teamr->insertTeam($team);
=======
        
        $firstName = $_POST['firstName']; //merret nga formulari
        $lastName = $_POST['lastName'];
        $pozita = $_POST['pozita'];
        $pershkrimi = $_POST['pershkrimi'];
        $image = $_POST['foto'];
    
        $team = new Team_connect($firstName,$lastName,$pozita,$pershkrimi, $image);
    
        $teamregister= new TeamRepository();
        $teamregister->insertTeam($team);
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        <p>Register</p>
=======
        <p>Register Team</p>
>>>>>>> Stashed changes
    </div>

    <div class="form-div">
        <form class="register-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div>
                <label for="">First Name:</label>  
<<<<<<< Updated upstream
                <input class="input-field-1" type="text" name="firstname"" >

                <label for="">Last Name:</label>
                <input class="input-field-2" type="text" name="lastname" >
=======
                <input class="input-field-1" type="text" name="firstName" >

                <label for="">Last Name:</label>
                <input class="input-field-2" type="text" name="lastName" >
>>>>>>> Stashed changes
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