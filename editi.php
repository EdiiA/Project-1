<?php
include ('VeturaRepository.php');
$id = $_GET['id'];//e merr id e punes prej url

$jbrep = new VeturaRepository();
$puna = $jbrep->getVeturaById($id);
?>

<!DOCTYPE html>
<html>
<style>
    h3 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    
    <h3>Edit Puna</h3>

    </div>

    <div class="form-div">
        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST">
            <div>
                <label for="">Emri:</label>  
                <input class="input-field-1" type="text" name="emri"  value="<?php echo $vetura['Emri']?>">
                <label for="">Viti i Prodhimit:</label>
                <input class="input-field-2" type="text" name="vitiProdhimit"  value="<?php echo $vetura['VitiProdhimit']?>">
            </div><br>

            <div>
                <label for="">Km:</label>
                <input class="input-field" type="text" name="km"  value="<?php echo $vetura['Km']?>">
                <label for="">Motori:</label>
                <input class="input-field" type="text" name="motori"  value="<?php echo $vetura['Motori']?>">
            </div><br>

            <div>
                <label for="">HP:</label>
                <input class="input-field" type="text" name="hp"  value="<?php echo $vetura['HP']?>">
                <label for="">Cmimi:</label>
                <input class="input-field" type="text" name="cmimi"  value="<?php echo $vetura['Cmimi']?>">
            </div><br>
            
            <input class="edit-submit" type="submit" name="editBtn" value="save">
        </form>
    </div>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $id;
        $emri = $_POST['emri'];
        $vitiProdhimit = $_POST['vitiProdhimit']; // Fix variable name
        $km = $_POST['km'];
        $motori = $_POST['motori'];
        $hp = $_POST['hp'];
        $cmimi = $_POST['cmimi'];
    $jbrep->editVetura($id, $emri, $vitiProdhimit, $km, $motori, $hp, $cmimi);
    header("location:dashboard.php");
    exit();
}
$puna = $jbrep->getVeturaById($id);

?>