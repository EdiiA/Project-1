<?php
include 'VeturaRepository.php';
$id = $_GET['id'];//e merr id e studentit prej url

$strep = new VeturaRepository();
$student = $strep->getVeturaById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit Vetura</h3>
    <form action="<?php echo $SERVER['PHP_SELF']?>" method="POST">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
        <input type="text" name="emri"  value="<?php echo $vetura['Emri']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <input type="text" name="vitiProdhimit"  value="<?php echo $vetura['VitiProdhimit']?>"> <br> <br>
        <input type="text" name="km"  value="<?php echo $vetura['Km']?>"> <br> <br>
        <input type="date" name="motori"  value="<?php echo $vetura['Motori']?>"> <br> <br>
        <input type="text" name="hp"  value="<?php echo $vetura['Hp']?>"> <br> <br>
        <input type="text" name="cmimi"  value="<?php echo $vetura['Cmimi']?>"> <br> <br>
        
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>



    <div class="edit-title">
        <p>Edit Vetura</p>
    </div>

    <div class="form-div">
        <form class="edit-form" action="<?php echo $SERVER['PHP_SELF']?>" method="post">
            <div>
                <label for="">Emri:</label>  
                <input type="text" name="emri"  value="<?php echo $vetura['Emri']?>">

                <label for="">Viti i Prodhimit:</label>
                <input type="text" name="vitiProdhimit"  value="<?php echo $vetura['VitiProdhimit']?>">
            </div><br>

            <div>
                <label for="">Km:</label>
                <input type="text" name="km"  value="<?php echo $vetura['Km']?>">

                <label for="">Motori:</label>
                <input type="date" name="motori"  value="<?php echo $vetura['Motori']?>">
            </div><br>

            <div>
                <label for="">HP:</label>
                <input type="text" name="hp"  value="<?php echo $vetura['Hp']?>">

                <label for="">Cmimi:</label>
                <input type="text" name="cmimi"  value="<?php echo $vetura['Cmimi']?>">
            </div><br>
            
            <input class="edit-submit" type="submit" name="editBtn" value="save" href="AdminDashboard.php">
        </form>
    </div>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $emri = $_POST['emri']; //merret nga formulari
    $vitiProdhimit = $_POST['$vitiProdhimit'];
    $km = $_POST['km'];
    $motori = $_POST['motori'];
    $hp = $_POST['hp'];
    $cmimi = $_POST['cmimi'];
    

    $strep->editVetura($id,$emri,$vitiProdhimit,$km,$motori,$hp,$cmimi);
    header("location:AdminDashboard.php");
}

?>