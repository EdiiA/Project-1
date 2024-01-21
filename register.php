Register: <?php
    include_once 'Vetura.php';
    include_once 'VeturaRepository.php';

    if (isset($_POST['submitbtn'])) {
        $emri = $_POST['emri'];
        $vitiProdhimit = $_POST['vitiProdhimit'];
        $km = $_POST['km'];
        $motori = $_POST['motori'];
        $hp = $_POST['hp'];
        $cmimi = $_POST['cmimi'];
    
        $vetura = new Vetura($emri, $vitiProdhimit,$km,$motori,$hp,$cmimi);
    
        $veturaRepository = new VeturaRepository();
        $veturaRepository->insertVetura($vetura);
        header("location:AdminDashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">  
        <input type="text" name="emri" ><br>
        <input type="text" name="vitiProdhimit" ><br>
        <input type="text" name="km" ><br>
        <input type="email" name="motori" ><br>
        <input type="text" name="hp" ><br>
        <input type="text" name="cmimi" ><br>
        <input type="submit" name="submitbtn" value="Submit">
    </form>
</body>
</html>