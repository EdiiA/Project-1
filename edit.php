<?php
include 'VeturaRepository.php';
$id = $_GET['id'];//e merr id e studentit prej url

$strep = new VeturaRepository();
$vetura = $strep->getVeturaById($id);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <?php
        include('header.php');
        
        echo $header1;
    ?>

    <!-- <h3>Edit Vetura</h3>
    <form action="<?php //echo $SERVER['PHP_SELF']?>" method="POST">
    
        <input type="text" name="emri"  value="<?php //echo $vetura['Emri']?>"> <br> <br> 
        <input type="text" name="vitiProdhimit"  value="<?php //echo $vetura['VitiProdhimit']?>"> <br> <br>
        <input type="text" name="km"  value="<?php //echo $vetura['Km']?>"> <br> <br>
        <input type="date" name="motori"  value="<?php //echo $vetura['Motori']?>"> <br> <br>
        <input type="text" name="hp"  value="<?php //echo $vetura['Hp']?>"> <br> <br>
        <input type="text" name="cmimi"  value="<?php //echo $vetura['Cmimi']?>"> <br> <br>
        
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form> -->



    <div class="edit-title">
        <p>Edit Vetura</p>
    </div>

    <div class="form-div">
        <form class="edit-form" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST">
             <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
            <div>
                <label for="">Emri:</label>  
                <input class="input-field-1" type="text" name="emri"  value="<?php echo $vetura['Emri']?>"><!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->

                <label for="">Viti i Prodhimit:</label>
                <input class="input-field-2" type="text" name="vitiProdhimit"  value="<?php echo $vetura['VitiProdhimit']?>">
            </div><br>

            <div>
                <label for="">Km:</label>
                <input  class="input-field" type="text" name="km"  value="<?php echo $vetura['Km']?>">

                <label for="">Motori:</label>
                <input  class="input-field" type="text" name="motori"  value="<?php echo $vetura['Motori']?>">
            </div><br>

            <div>
                <label for="">HP:</label>
                <input  class="input-field" type="text" name="hp"  value="<?php echo $vetura['HP']?>">

                <label for="">Cmimi:</label>
                <input  class="input-field" type="text" name="cmimi"  value="<?php echo $vetura['Cmimi']?>">
            </div><br>

            <div>
                <label for="">Foto:</label>
                <input  class="input-field" type="file" name="foto"  value="<?php echo $vetura['Foto']?>">
            </div>
            
            <input class="edit-submit" type="submit" name="editBtn" value="save">

            <!-- <button name="editBtn"><a href="AdminDashboard.php">Save Changes</a></button> -->
        </form>
    </div>

    <?php
        include('footer.php');
    
        echo $footer1;
    ?>
</body>
</html>

<?php 

    if(isset($_POST['editBtn'])){
        $id =$id;
        $emri = $_POST['emri']; //merret nga formulari
        $vitiProdhimit = $_POST['vitiProdhimit'];
        $km = $_POST['km'];
        $motori = $_POST['motori'];
        $hp = $_POST['hp'];
        $cmimi = $_POST['cmimi'];
        $foto = $_POST['foto'];
        

        $strep->editVetura($id,$emri,$vitiProdhimit,$km,$motori,$hp,$cmimi, $foto);
        header("location:AdminDashboard.php");
        exit();
    }
    $vetura = $strep->getVeturaById($id);
?>