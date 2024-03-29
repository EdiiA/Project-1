<?php
    include_once 'Vetura.php';
    include_once 'VeturaRepository.php';

    $addedBy = isset($_SESSION['name']) ? "Added By: " . $_SESSION['name'] : "Added By: Unknown";

    if (isset($_POST['submitbtn'])) {
        $emri = $_POST['emri'];
        $vitiProdhimit = $_POST['vitiProdhimit'];
        $km = $_POST['km'];
        $motori = $_POST['motori'];
        $hp = $_POST['hp'];
        $cmimi = $_POST['cmimi'];
        $foto = $_POST['foto'];
        $modifikim = $_POST['modifikoi'];
        
        $vetura = new Vetura($emri,$vitiProdhimit,$km,$motori,$hp,$cmimi,$foto,$modifikim);
    
        $veturaRepository = new VeturaRepository();
        $veturaRepository->insertVetura($vetura);
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
                <label for="">Emri:</label>  
                <input class="input-field-1" type="text" name="emri" >

                <label for="">Viti i Prodhimit:</label>
                <input class="input-field-2" type="text" name="vitiProdhimit" >
            </div><br>

            <div>
                <label for="">Km:</label>
                <input class="input-field" type="text" name="km" >

                <label for="">Motori:</label>
                <input class="input-field" type="text" name="motori" >
            </div><br>

            <div>
                <label for="">HP:</label>
                <input class="input-field" type="text" name="hp" >

                <label for="">Cmimi:</label>
                <input class="input-field" type="text" name="cmimi" >
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